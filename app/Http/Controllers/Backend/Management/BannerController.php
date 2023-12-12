<?php

namespace App\Http\Controllers\Backend\Management;

    use App\Http\Controllers\Controller;
    use App\Models\Banner;
    use App\Models\Translation;
    use Auth;
    use Illuminate\Http\Request;
    use Validator;

    class BannerController extends Controller
    {
        public function __construct()
        {
            $this->middleware('backend');
        }

        public function deleteBanner($id)
        {
            Banner::where('id', $id)->delete();

            return redirect()->route('backend-management-banners');
        }

        public function editBannerForm(Request $request)
        {
            if ($request->getMethod() == 'POST') {
                if ($request->get('banner_edit_id')) {
                    $banner = Banner::where('id', $request->input('banner_edit_id'))->get()->first();

                    if ($banner != null) {
                        if ($request->get('translation_lng') && strlen($request->get('translation_lng'))) {
                            $lng = strtolower($request->input('translation_lng'));
                            foreach (['title', 'content'] as $keyword) {
                                $translation = Translation::where([
                                    ['lang', '=', $lng],
                                    ['type', '=', 'banner'],
                                    ['keyword', '=', $keyword],
                                    ['entry_id', '=', $banner->id],
                                ])->get()->first();

                                if ($translation == null) {
                                    Translation::create([
                                        'lang' => $lng,
                                        'entry_id' => $banner->id,
                                        'keyword' => $keyword,
                                        'value' => $request->input('banner_edit_'.$keyword) ?? '',
                                        'type' => 'banner',
                                    ]);
                                } else {
                                    $translation->update([
                                        'value' => $request->input('banner_edit_'.$keyword) ?? '',
                                    ]);
                                }
                            }

                            return redirect()->route('lang-edit-banner', [$lng, $banner->id])->with([
                                'successMessage' => __('backend/main.changes_successfully'),
                            ]);
                        }

                        $validator = Validator::make($request->all(), [
                            'banner_edit_title' => 'required|max:255',
                            'banner_edit_content' => 'required|max:5000',
                            'banner_edit_link' => 'required|max:5000',
                        ]);

                        if (! $validator->fails()) {
                            $title = $request->input('banner_edit_title');
                            $content = $request->input('banner_edit_content');
                            $link = $request->input('banner_edit_link');

                            $img_path = $banner->img_path;
                            if($request->hasfile('banner_img'))
                            {
                                $file = $request->file('banner_img');
                                $img_path = time().rand(1,50) . '.' . $file->extension();
                                $file->move(public_path('files').'/banner', $img_path);  
                            }

                            $banner->update([
                                'title' => $title,
                                'content' => encrypt($content),
                                'link' => $link,
                                'img_path' => $img_path,
                            ]);

                            return redirect()->route('backend-management-banner-edit', $banner->id)->with([
                                'successMessage' => __('backend/main.changes_successfully'),
                            ]);
                        }

                        $request->flash();

                        return redirect()->route('backend-management-banner-edit', $banner->id)->withErrors($validator)->withInput();
                    }
                }
            }

            return redirect()->route('backend-management-banners');
        }

        public function showBannerEditPageLang($lang, $id)
        {
            if (! in_array(strtolower($lang), \App\Models\Setting::getAvailableLocales())) {
                return redirect()->route('backend-management-banners');
            }

            return $this->showBannerEditPage($id, $lang);
        }

        public function showBannerEditPage($id, $lang = null)
        {
            $banner = Banner::where('id', $id)->get()->first();

            if ($banner == null) {
                return redirect()->route('backend-management-banners');
            }

            return view('backend.management.banners.edit', [
                'banner' => $banner,
                'lang' => $lang,
                'managementPage' => true,
            ]);
        }

        public function addBannerForm(Request $request)
        {
            if ($request->getMethod() == 'POST') {
                $validator = Validator::make($request->all(), [
                    'banner_add_title' => 'required|max:255',
                    'banner_add_content' => 'required|max:5000',
                    'banner_img' => 'required',
                ]);

                if (! $validator->fails()) {
                    $title = $request->input('banner_add_title');
                    $content = $request->input('banner_add_content');
                    $img_path = '';
                    if($request->hasfile('banner_img'))
                    {
                        $file = $request->file('banner_img');
                        $img_path = time().rand(1,50) . '.' . $file->extension();
                        $file->move(public_path('files').'/banner', $img_path);  
                    }

                    $banner = Banner::create([
                        'content' => encrypt($content),
                        'title' => $title,
                        'img_path' => $img_path,
                    ]);

                    return redirect()->route('backend-management-banner-edit', $banner->id)->with([
                        'successMessage' => __('backend/main.added_successfully'),
                    ]);
                }

                $request->flash();

                return redirect()->route('backend-management-banner-add')->withErrors($validator)->withInput();
            }

            return redirect()->route('backend-management-banner-add');
        }

        public function showBannerAddPage(Request $request)
        {
            return view('backend.management.banners.add', [
                'managementPage' => true,
            ]);
        }

        public function showBannersPage(Request $request, $pageNumber = 0)
        {
            $banners = Banner::orderByDesc('created_at')->paginate(10, ['*'], 'page', $pageNumber);

            if ($pageNumber > $banners->lastPage() || $pageNumber <= 0) {
                return redirect()->route('backend-management-banners-with-pageNumber', 1);
            }
            if (count($banners) > 0) {
                return redirect()->route('backend-management-banner-edit', $banners[0]->id);
            } else {
                return redirect()->route('backend-management-banner-add');
            }
            
            return view('backend.management.banners.list', [
                'banners' => $banners,
                'managementPage' => true,
            ]);
        }
    }
