@extends('backend.layouts.default')
@section('title',__('backend/management.products.title'))
@section('content')
<style>
	.product-img {
		width: 100%;
		margin-bottom: 20px;
		height: 200px;
		object-fit: contain;
	}
	.product-img-item {
		padding: 4px;
	}
</style>
<div class="container-fluid">
	<div class="row mt-4 g-md-3 g-3">
		<div class="col-lg-12">
			<a data-bs-toggle="offcanvas" data-bs-target="#add-product" aria-controls="add-product" href="#" class="btn-go-to-shop goshop_link" style="margin-bottom:15px">{{ __('backend/main.add') }}</a>
		</div>
		<!-- transaction -->
		<div class="col-lg-12">
			<div class="bg-secondary rounded-2 p-3">
				<div class="row d-flex align-items-center title-box-transaction">
					<div class="col-12 col-md-7">
						<p class="title-table-box">{{ __('backend/management.products.title') }}</p>
					</div>
					<div class="col-12 col-md-5 input-mt">
						<div class="position-relative">
							<!-- Occupies 8 columns (3/3 width) on medium screens and up -->
							<svg class="ic-input ic-white" xmlns="http://www.w3.org/2000/svg" width="19" height="19"
								viewBox="0 0 19 19" fill="none">
								<circle cx="8" cy="8" r="7" stroke="#7D7D7D" stroke-width="2" />
								<path d="M13 13L17.5 18" stroke="#7D7D7D" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>
							<input type="text" class="form-control input-ic-p" placeholder="Search" />
						</div>
					</div>
				</div>

				<!-- table mobile -->
				<div class="mt-30 table-mobile">
					<!-- table item -->
					<div class="table-mb">
						<div class="row-table d-flex">
							<div class="value-table-mb">
								<div class="d-flex align-items-center">
									<input class="form-check-input check-box-table" type="checkbox" value=""
										id="flexCheckDefault" />
									<span>#0192</span>
								</div>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Images :</div>
							<div class="value-table-mb">
								<span>Vectorry.png</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Product :</div>
							<div class="value-table-mb">
								<span>iPhone 13 Pro</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Category :</div>
							<div class="value-table-mb"><span>Coin</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Price :</div>
							<div class="value-table-mb"><span>€500.00</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Stock Status :</div>
							<div class="value-table-mb">
								<span class="state-paid">02</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Sale :</div>
							<div class="value-table-mb"><span>2</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Action :</div>
							<div class="value-table-mb">
								<div class="d-flex">
									<div>
										<svg class="btn-view" xmlns="http://www.w3.org/2000/svg" width="24" height="17"
											viewBox="0 0 24 17" fill="none">
											<path
												d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
												fill="#BBBBBB" />
										</svg>
									</div>
									<div>
										<svg class="btn-update" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path
												d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
									</div>
									<div>
										<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- table item -->
					<div class="table-mb">
						<div class="row-table d-flex">
							<div class="value-table-mb">
								<div class="d-flex align-items-center">
									<input class="form-check-input check-box-table" type="checkbox" value=""
										id="flexCheckDefault" />
									<span>#0192</span>
								</div>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Images :</div>
							<div class="value-table-mb">
								<span>Vectorry.png</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Product :</div>
							<div class="value-table-mb">
								<span>iPhone 13 Pro</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Category :</div>
							<div class="value-table-mb"><span>Coin</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Price :</div>
							<div class="value-table-mb"><span>€500.00</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Stock Status :</div>
							<div class="value-table-mb">
								<span class="state-paid">02</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Sale :</div>
							<div class="value-table-mb"><span>2</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Action :</div>
							<div class="value-table-mb">
								<div class="d-flex">
									<div>
										<svg class="btn-view" xmlns="http://www.w3.org/2000/svg" width="24" height="17"
											viewBox="0 0 24 17" fill="none">
											<path
												d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
												fill="#BBBBBB" />
										</svg>
									</div>
									<div>
										<svg class="btn-update" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path
												d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
									</div>
									<div>
										<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- table item -->
					<div class="table-mb">
						<div class="row-table d-flex">
							<div class="value-table-mb">
								<div class="d-flex align-items-center">
									<input class="form-check-input check-box-table" type="checkbox" value=""
										id="flexCheckDefault" />
									<span>#0192</span>
								</div>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Images :</div>
							<div class="value-table-mb">
								<span>Vectorry.png</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Product :</div>
							<div class="value-table-mb">
								<span>iPhone 13 Pro</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Category :</div>
							<div class="value-table-mb"><span>Coin</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Price :</div>
							<div class="value-table-mb"><span>€500.00</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Stock Status :</div>
							<div class="value-table-mb">
								<span class="state-paid">02</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Sale :</div>
							<div class="value-table-mb"><span>2</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Action :</div>
							<div class="value-table-mb">
								<div class="d-flex">
									<div>
										<svg class="btn-view" xmlns="http://www.w3.org/2000/svg" width="24" height="17"
											viewBox="0 0 24 17" fill="none">
											<path
												d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
												fill="#BBBBBB" />
										</svg>
									</div>
									<div>
										<svg class="btn-update" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path
												d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
									</div>
									<div>
										<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- table item -->
					<div class="table-mb">
						<div class="row-table d-flex">
							<div class="value-table-mb">
								<div class="d-flex align-items-center">
									<input class="form-check-input check-box-table" type="checkbox" value=""
										id="flexCheckDefault" />
									<span>#0192</span>
								</div>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Images :</div>
							<div class="value-table-mb">
								<span>Vectorry.png</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Product :</div>
							<div class="value-table-mb">
								<span>iPhone 13 Pro</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Category :</div>
							<div class="value-table-mb"><span>Coin</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Price :</div>
							<div class="value-table-mb"><span>€500.00</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Stock Status :</div>
							<div class="value-table-mb">
								<span class="state-paid">02</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Sale :</div>
							<div class="value-table-mb"><span>2</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Action :</div>
							<div class="value-table-mb">
								<div class="d-flex">
									<div>
										<svg class="btn-view" xmlns="http://www.w3.org/2000/svg" width="24" height="17"
											viewBox="0 0 24 17" fill="none">
											<path
												d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
												fill="#BBBBBB" />
										</svg>
									</div>
									<div>
										<svg class="btn-update" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path
												d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
									</div>
									<div>
										<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- table item -->
					<div class="table-mb">
						<div class="row-table d-flex">
							<div class="value-table-mb">
								<div class="d-flex align-items-center">
									<input class="form-check-input check-box-table" type="checkbox" value=""
										id="flexCheckDefault" />
									<span>#0192</span>
								</div>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Images :</div>
							<div class="value-table-mb">
								<span>Vectorry.png</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Product :</div>
							<div class="value-table-mb">
								<span>iPhone 13 Pro</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Category :</div>
							<div class="value-table-mb"><span>Coin</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Price :</div>
							<div class="value-table-mb"><span>€500.00</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Stock Status :</div>
							<div class="value-table-mb">
								<span class="state-paid">02</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Sale :</div>
							<div class="value-table-mb"><span>2</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Action :</div>
							<div class="value-table-mb">
								<div class="d-flex">
									<div>
										<svg class="btn-view" xmlns="http://www.w3.org/2000/svg" width="24" height="17"
											viewBox="0 0 24 17" fill="none">
											<path
												d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
												fill="#BBBBBB" />
										</svg>
									</div>
									<div>
										<svg class="btn-update" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path
												d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
									</div>
									<div>
										<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- table item -->
					<div class="table-mb">
						<div class="row-table d-flex">
							<div class="value-table-mb">
								<div class="d-flex align-items-center">
									<input class="form-check-input check-box-table" type="checkbox" value=""
										id="flexCheckDefault" />
									<span>#0192</span>
								</div>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Images :</div>
							<div class="value-table-mb">
								<span>Vectorry.png</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Product :</div>
							<div class="value-table-mb">
								<span>iPhone 13 Pro</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Category :</div>
							<div class="value-table-mb"><span>Coin</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Price :</div>
							<div class="value-table-mb"><span>€500.00</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Stock Status :</div>
							<div class="value-table-mb">
								<span class="state-paid">02</span>
							</div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Sale :</div>
							<div class="value-table-mb"><span>2</span></div>
						</div>
						<div class="row-table d-flex">
							<div class="title-table-mb">Action :</div>
							<div class="value-table-mb">
								<div class="d-flex">
									<div>
										<svg class="btn-view" xmlns="http://www.w3.org/2000/svg" width="24" height="17"
											viewBox="0 0 24 17" fill="none">
											<path
												d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
												fill="#BBBBBB" />
										</svg>
									</div>
									<div>
										<svg class="btn-update" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path
												d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path
												d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
												stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
									</div>
									<div>
										<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
											fill="none">
											<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round" />
											<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB"
												stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- table pc -->
				<div class="mt-30 table-pc">
					<!-- table item -->
					@if(count($products))
					<table class="table mt-2 table-striped">
						<!-- title table pc -->
						<thead class="d-md-table-header-group table-header-pc">
							
							<tr>
								<th>
									<input class="form-check-input check-box-table" type="checkbox" value=""
										id="flexCheckDefault" />
								</th>
								<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.products.id') }} <span class="d-inline d-md-none">:</span></th>
								<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.products.name') }} <span class="d-inline d-md-none">:</span></th>
								<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.products.category') }} <span class="d-inline d-md-none">:</span></th>
								<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.products.price') }} <span class="d-inline d-md-none">:</span></th>
								<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.products.stock_status') }} <span class="d-inline d-md-none">:</span></th>
								<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.products.sells') }} <span class="d-inline d-md-none">:</span></th>
								<th scope="col" class="d-block d-md-flex justify-content-end">{{ __('backend/management.products.actions') }} <span class="d-inline d-md-none">:</span></th>
							</tr>
						</thead>
						@foreach($products as $product)
							<tr>
								<td scope="row" class="d-block d-md-table-cell">
									<input class="form-check-input check-box-table" type="checkbox" value=""
										id="flexCheckDefault" />
								</td>
								<td scope="row" class="d-block d-md-table-cell">{{ $product->id }}</td>
								<td class="fs-20 d-block d-md-table-cell text-capitalize">{{ $product->name }}</td>
								<td class="fs-20 d-block d-md-table-cell">
									@if($product->getCategory()->slug == 'uncategorized')
									{{ $product->getCategory()->name }}
									@else
									<a
										href="{{ route('backend-management-product-category-edit', $product->getCategory()->id) }}">{{
										$product->getCategory()->name }}</a>
									@endif
								</td>
								<td class="fs-20 d-block d-md-table-cell">{{ $product->getFormattedPrice() }}</td>
								<td class="fs-20 d-block d-md-table-cell">
									@if($product->isUnlimited())
									<span class="state-pending">{{ __('backend/management.products.unlimited') }}</span>
									
									@elseif($product->asWeight())
									{{ __('backend/management.products.weight_available', [
									'weight' => $product->getWeightAvailable(),
									'char' => $product->getWeightChar()
									]) }}
									@else
									@if($product->inStock())
									<span class="state-paid">{{ $product->getStock() }}</span>
									@else
									<span class="state-invalid">{{ __('backend/management.products.sold_out') }}</span>
									
									@endif
									@endif
								</td>
								<td class="fs-20 d-block d-md-table-cell">
									{{ $product->getSells() }}@if($product->asWeight()){{ $product->getWeightChar()
									}}@endif
								</td>
								<td class="fs-20 d-block d-md-flex justify-content-end">
									<div class="d-flex">
										{{-- <div>
											<svg class="btn-view" xmlns="http://www.w3.org/2000/svg" width="24" height="17"
												viewBox="0 0 24 17" fill="none">
												<path
													d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
													fill="#BBBBBB" />
											</svg>
										</div> --}}
										<div>
											<a href="#">
											<svg data-bs-toggle="offcanvas" data-bs-target="#edit-product_{{$product->id}}"
												aria-controls="edit-product" class="btn-update"
												xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
												<path
													d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
													stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
												<path
													d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
													stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
											</svg>
											</a>
										</div>
										<div>
											<a href="{{ route('backend-management-product-delete', $product->id) }}">
											<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
												fill="none">
												<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
													stroke-linejoin="round" />
												<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
											</a>
										</div>
									</div>
									<!-- canvas edit -->
									<div class="offcanvas offcanvas-end canvas-edit" tabindex="-1" id="edit-product_{{$product->id}}" aria-labelledby="offcanvasTopLabel">
										<!-- header-canvas-edit -->
										<div class="offcanvas-header canvas-header row">
											<div class="d-flex col-md-4 col-11">
												<div class="d-none d-md-block">
													<svg class="btn-close-canvas" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
														xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
														<path d="M23.75 15H6.25" stroke="white" stroke-width="2" stroke-linecap="round"
															stroke-linejoin="round" />
														<path d="M15 23.75L6.25 15L15 6.25" stroke="white" stroke-width="2" stroke-linecap="round"
															stroke-linejoin="round" />
													</svg>
												</div>

												<div>
													<p class="name-canvas">Edit Product</p>
													<p class="desc-canvas">#{{$product->id}}</p>
												</div>

												<div>

												</div>
											</div>
											<div class="col-1 d-md-none">
												<svg data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" xmlns="http://www.w3.org/2000/svg"
													width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path
														d="M6.7072 5.29289C6.31668 4.90237 5.68351 4.90237 5.29299 5.29289C4.90246 5.68342 4.90246 6.31658 5.29299 6.70711L10.5858 12L5.29289 17.2929C4.90237 17.6834 4.90237 18.3166 5.29289 18.7071C5.68342 19.0976 6.31658 19.0976 6.70711 18.7071L12 13.4142L17.293 18.7071C17.6835 19.0976 18.3167 19.0976 18.7072 18.7071C19.0977 18.3166 19.0977 17.6834 18.7072 17.2929L13.4143 12L18.7071 6.70711C19.0976 6.31658 19.0976 5.68342 18.7071 5.29289C18.3166 4.90237 17.6834 4.90237 17.2929 5.29289L12 10.5857L6.7072 5.29289Z"
														fill="#6F767E" />
												</svg>
											</div>
											<div class="d-flex justify-content-end gap-3 gap-md-2 col-md-8">
												<button class="btn-go-to-shop"><a href="{{ route('backend-management-product-database', $product->id) }}">{{ __('backend/management.products.edit.database') }}</a></button>
												<button class="btn-go-to-shop btn-dark"><a href="{{ route('product-page', $product->id) }}" target="_shop_product_{{ $product->id }}">{{ __('backend/management.products.show_product') }}</a></button>
											</div>
										</div>
										<!-- body-canvas-edit -->
										<div class="offcanvas-body">
											<form method="post" action="{{ route('backend-management-product-edit-form') }}" enctype="multipart/form-data">
												@csrf
												{{-- @if($lang != null)
													<input type="hidden" name="translation_lng" value="{{ strtolower($lang) }}" />
												@endif --}}
												<input type="hidden" name="product_edit_id" value="{{ $product->id }}" />
												<div class="mt-4">
													<div>
														<label for="product_edit_name">{{ __('backend/management.products.name') }}</label>
														<input type="text" class="form-control @if($errors->has('product_edit_name')) is-invalid @endif" id="product_edit_name" name="product_edit_name" placeholder="{{ __('backend/management.products.name') }}" value="{{ \App\Classes\LangHelper::getValue($lang, 'product', 'name', $product->id) ?? $product->name }}" />

														@if($errors->has('product_edit_name'))
															<span class="invalid-feedback" style="display:block" role="alert">
																<strong>{{ $errors->first('product_edit_name') }}</strong>
															</span>
														@endif
													</div>
												</div>
												<div class="mt-4">
													<div>
														<label for="address" class="d-none d-md-block">Product Image</label>
														<input type="file" class="form-control" id="product_img_{{ $product->id }}" name="product_img[]" accept="image/*" multiple @if(count($product->getImages()) >= 3) disabled @endif style="display:none;">
														<div class="p-3 custom-choose-file row">
															<div class="col-12 d-flex justify-content-center">
																<svg class="ic-choose" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
																	viewBox="0 0 28 28" fill="none">
																	<g clip-path="url(#clip0_1_7613)">
																		<path
																			d="M27.9866 11.3457C27.9638 10.8694 27.6014 10.4908 27.121 10.4241C26.7171 10.3687 26.2652 10.6537 26.1154 11.0657C26.051 11.2399 26.047 11.4231 26.0478 11.6071C26.0486 13.9886 26.0486 16.3693 26.047 18.7508C26.047 18.8672 26.0771 18.9902 26.0014 19.1367C25.8906 19.0146 25.7897 18.9079 25.6928 18.7972C24.065 16.936 22.4381 15.0731 20.8095 13.2135C19.1695 11.3392 16.6583 11.3384 15.0159 13.2102C13.8954 14.4877 12.7733 15.7644 11.6634 17.0508C11.503 17.2364 11.4322 17.2226 11.2897 17.0402C10.9395 16.5908 10.5821 16.1454 10.2018 15.722C9.29388 14.7124 8.15958 14.3151 6.82008 14.5471C5.97729 14.6929 5.27945 15.1122 4.73144 15.7684C3.82514 16.8521 2.92617 17.9415 1.97427 19.0895C1.9645 18.9405 1.95635 18.8721 1.95635 18.8029C1.95554 14.6001 1.95635 10.398 1.95554 6.19518C1.95554 5.78564 2.00684 5.38425 2.12491 4.99099C2.67537 3.15336 4.29579 1.95895 6.26962 1.95569C9.64809 1.94999 13.0274 1.95406 16.4058 1.95488C16.6526 1.95488 16.8944 1.94022 17.1118 1.80588C17.4937 1.56895 17.6672 1.12359 17.5426 0.695324C17.4156 0.258103 17.0442 0.00163347 16.515 0.00163347C13.0754 -0.000809102 9.63506 0.00163347 6.19552 5.08822e-06C5.53921 -0.000809102 4.89918 0.0960795 4.27462 0.297185C1.69578 1.1301 0.00695661 3.48067 0.00369947 6.27416C-0.00281481 11.4434 0.00125661 16.6127 0.00125661 21.7829C0.00125661 22.1899 0.028128 22.5954 0.110371 22.996C0.727599 25.9824 3.19651 27.9919 6.28428 27.9959C11.424 28.0033 16.5638 27.9984 21.7036 27.9984C22.1311 27.9984 22.5569 27.9764 22.9779 27.8901C25.9574 27.2778 27.9882 24.7962 27.9907 21.756C27.9939 18.5505 27.9915 15.345 27.9915 12.1396C27.9915 11.875 27.9996 11.6095 27.9866 11.3457ZM25.9436 22.317C25.6415 24.5096 23.9087 26.0378 21.6962 26.0427C19.1207 26.0484 16.5459 26.0443 13.9711 26.0443C11.3955 26.0443 8.82078 26.0508 6.24601 26.0419C4.05395 26.0346 2.33581 24.5397 1.99951 22.3788C1.9759 22.225 1.9987 22.1102 2.09885 21.988C3.44568 20.3556 4.78192 18.7142 6.13445 17.0866C6.83636 16.2423 8.03336 16.2512 8.74342 17.0907C9.35413 17.8137 9.95263 18.5464 10.5576 19.2743C11.0731 19.8947 11.7009 19.9045 12.2367 19.2922C13.6641 17.6606 15.09 16.0282 16.5141 14.3941C17.01 13.825 17.6199 13.623 18.3504 13.8184C18.6842 13.9072 18.9505 14.1067 19.1777 14.3656C21.3933 16.8896 23.609 19.4119 25.8287 21.9327C25.933 22.0499 25.9655 22.1606 25.9436 22.317Z"
																			fill="#7D7D7D" />
																		<path
																			d="M25.9448 22.317C25.6427 24.5096 23.9099 26.0378 21.6975 26.0427C19.1219 26.0484 16.5471 26.0443 13.9724 26.0443C11.3968 26.0443 8.82201 26.0508 6.24724 26.0419C4.05519 26.0346 2.33704 24.5397 2.00074 22.3788C1.97713 22.225 1.99993 22.1102 2.10009 21.988C3.44691 20.3556 4.78316 18.7142 6.13568 17.0866C6.8376 16.2423 8.0346 16.2512 8.74465 17.0907C9.35537 17.8137 9.95387 18.5464 10.5589 19.2743C11.0743 19.8947 11.7021 19.9045 12.2379 19.2922C13.6654 17.6606 15.0912 16.0282 16.5154 14.3941C17.0113 13.825 17.6212 13.623 18.3516 13.8184C18.6854 13.9072 18.9517 14.1067 19.1789 14.3656C21.3946 16.8896 23.6102 19.4119 25.83 21.9327C25.9342 22.0499 25.9668 22.1606 25.9448 22.317Z"
																			fill="#7D7D7D" />
																		<path
																			d="M25.6996 3.90812C26.1271 3.90812 26.5546 3.90323 26.9813 3.90974C27.5757 3.91789 27.9902 4.30707 28.0008 4.85583C28.0114 5.4217 27.6018 5.84833 27 5.8581C26.1459 5.87194 25.2909 5.8752 24.4367 5.85485C24.146 5.84833 24.0833 5.94441 24.089 6.21553C24.1053 7.03949 24.0979 7.86345 24.0939 8.68741C24.0906 9.32085 23.7022 9.75563 23.1379 9.76784C22.576 9.78006 22.1461 9.32004 22.142 8.68741C22.1363 7.86345 22.1249 7.03949 22.1485 6.21553C22.1575 5.90777 22.0565 5.84833 21.7731 5.85485C20.9393 5.87357 20.1047 5.87031 19.2708 5.8581C18.5714 5.84833 18.1129 5.27758 18.2717 4.63926C18.38 4.2053 18.7342 3.91626 19.2057 3.91137C20.0705 3.9016 20.9352 3.89346 21.7992 3.91463C22.094 3.92196 22.151 3.821 22.1461 3.55313C22.1306 2.70881 22.1347 1.8645 22.1436 1.02018C22.1493 0.488518 22.4791 0.0871218 22.9441 0.0130305C23.431 -0.0643176 23.8675 0.188081 24.0393 0.640771C24.0955 0.78814 24.0939 0.939579 24.0939 1.09183C24.0955 1.92556 24.1053 2.76011 24.0882 3.59384C24.0833 3.85601 24.1704 3.92277 24.4171 3.91137C24.8446 3.89509 25.2721 3.90812 25.6996 3.90812Z"
																			fill="#7D7D7D" />
																		<path
																			d="M3.91217 7.49056C3.90077 5.52266 5.50003 3.91138 7.46815 3.90894C9.45012 3.9065 11.0575 5.48602 11.0697 7.44985C11.0819 9.43892 9.48839 11.0567 7.50887 11.0657C5.52201 11.0754 3.92438 9.48696 3.91217 7.49056ZM5.8689 7.46369C5.85994 8.37396 6.57244 9.1051 7.47467 9.11161C8.36142 9.11731 9.09916 8.40327 9.11545 7.52232C9.13255 6.61694 8.41598 5.87358 7.51864 5.86462C6.60012 5.85567 5.87867 6.55587 5.8689 7.46369Z"
																			fill="#7D7D7D" />
																	</g>
																	<defs>
																		<clipPath id="clip0_1_7613">
																			<rect width="28" height="28" fill="white" />
																		</clipPath>
																	</defs>
																</svg>
															</div>
															<div class="col-12 d-flex justify-content-center mt-2">
																{{-- <span class="text-white">Drag your file here or</span>  --}}
																<span class="text-green browse_file" data-file="#product_img_{{ $product->id }}" style="cursor: pointer;">Browse</span>
															</div>

															<div class="col-12 d-flex justify-content-center mt-2">
																<span class="text-desc">Maximum image size 50mb</span>
															</div>
														</div>
														<div class="row mt-4 justify-content-center">
															@foreach($product->getImages() as $img)
																<div class="col-sm-6 product-img-item" data-img_id="{{ $img->id }}">
																	<img src="{{ '/files/' . $img->img_path }}" class="product-img @if($img->is_main) selected @endif" data-img_path="{{ $img->img_path }}">
																	<span class="delete-img-btn"><i class="la la-trash"></i></span>
																</div>
															@endforeach
														</div>
														@if($product->getMainImage())
															<input type="hidden" name="main_img_name" id="main_img_name" value="{{$product->getMainImage()->img_path}}">
														@else
															<input type="hidden" name="main_img_name" id="main_img_name" value="">
														@endif
														<input type="hidden" name="main_img_index" id="main_img_index" value="-1">
														<input type="hidden" name="deleted_img_ids" id="deleted_img_ids" value="">
													</div>
												</div>
												<div class="mt-4">
													<label for="product_edit_short_description">{{ __('backend/management.products.short_description') }}</label>
													<input type="text" class="form-control @if($errors->has('product_edit_short_description')) is-invalid @endif" id="product_edit_short_description" name="product_edit_short_description" placeholder="{{ __('backend/management.products.short_description') }}" value="{{ \App\Classes\LangHelper::getValue($lang, 'product', 'short_description', $product->id) ?? (strlen($product->short_description) > 0 ? decrypt($product->short_description) : '') }}" />

													@if($errors->has('product_edit_short_description'))
														<span class="invalid-feedback" style="display:block" role="alert">
															<strong>{{ $errors->first('product_edit_short_description') }}</strong>
														</span>
													@endif
												</div>
												<div class="mt-4">
													<label for="product_edit_category_id">{{ __('backend/management.products.category') }}</label>
													<select name="product_edit_category_id" id="product_edit_category_id" class="form-control custom-select @if($errors->has('product_edit_category_id')) is-invalid @endif">
														<option value="0">{{ __('backend/main.please_choose') }}</option>
														@foreach(App\Models\ProductCategory::all() as $productCategory)
														<option value="{{ $productCategory->id }}" @if($product->category_id == $productCategory->id) selected @endif>{{ $productCategory->name }}</option>	
														@endforeach
													</select>
				
													@if($errors->has('product_edit_category_id'))
														<span class="invalid-feedback" style="display:block;" role="alert">
															<strong>{{ $errors->first('product_edit_category_id') }}</strong>
														</span>
													@endif
												</div>

												<div class="mt-4">
													<div>
														<label for="product_edit_description">{{ __('backend/management.products.description') }}</label>
														<textarea style="height: unset" class="text-editor form-control @if($errors->has('product_edit_description')) is-invalid @endif" id="product_edit_description" name="product_edit_description" placeholder="{{ __('backend/management.products.description') }}">{{ \App\Classes\LangHelper::getValue($lang, 'product', 'description', $product->id) ?? (strlen($product->description) > 0 ? decrypt($product->description) : '') }}</textarea>

														@if($errors->has('product_edit_description'))
															<span class="invalid-feedback" style="display:block" role="alert">
																<strong>{{ $errors->first('product_edit_description') }}</strong>
															</span>
														@endif
													</div>
												</div>

												<div class="mt-4">
													<label class="k-radio k-radio--all k-radio--solid">
														<input type="radio" name="product_edit_stock_management" value="variants" @if($product->asVariant()) checked @endif />
														<span></span>
														{{ __('backend/management.products.add.variant') }}
													</label>
												</div>
												<div class="mt-4">
													<label class="k-radio k-radio--all k-radio--solid">
														<input type="radio" name="product_edit_stock_management" value="tiered" @if($product->asTiered()) checked @endif />
														<span></span>
														{{ __('backend/management.products.edit.tiered') }}
													</label>
												</div>
												<div class="product_edit_variant_div"  style="@if(!$product->asVariant()) display: none; @endif">
													<div class="row">
														<div class="col-9 variant-wrapper">
															@if(count($product->variants) > 0)
																@foreach($product->variants as $variant)
																<div class="variant-item row">
																	<div class="col-5">
																		<div class="form-group">
																			<label for="">{{ __('backend/management.products.title') }}</label>
																			<input type="text" class="form-control product-variant-title" name="product_edit_variant_title[]" value="{{$variant->title}}" />
																		</div>
																	</div>
																	<div class="col-5">
																		<div class="form-group">
																			<label for="">{{ __('backend/management.products.price') }}</label>
																			<input type="number" step="any" class="form-control product-variant-price" name="product_edit_variant_price[]" value="{{$variant->price}}" />
																		</div>
																	</div>
																	<div class="col-2">
																		<a class="delete-variant cursor-pointer"><i class="la la-trash"></i></a>
																	</div>
																</div>
																@endforeach
															@else
															<div class="variant-item row">
																<div class="col-5">
																	<div class="form-group">
																		<label for="">{{ __('backend/management.products.title') }}</label>
																		<input type="text" class="form-control product-variant-title" name="product_edit_variant_title[]" />
																	</div>
																</div>
																<div class="col-5">
																	<div class="form-group">
																		<label for="">{{ __('backend/management.products.price') }}</label>
																		<input type="number" step="any" class="form-control product-variant-price" name="product_edit_variant_price[]" />
																	</div>
																</div>
																<div class="col-2">
																	<a class="delete-variant cursor-pointer"><i class="la la-trash"></i></a>
																</div>
															</div>
															@endif
														</div>
														<div class="col-3">
															<button class="btn btn-wide btn-bold btn-primary" id="add_variant_btn" type="button" style="margin-top:22px">Add</button>
														</div>
													</div>
												</div>
				
												<div class="product_edit_tiered_div"  style="@if(!$product->asTiered()) display: none; @endif">
													<div class="row">
														<div class="col-9 tiered-wrapper">
															@if(count($product->tieredPrices) > 0)
																@foreach($product->tieredPrices as $price)
																<div class="tiered-item row">
																	<div class="col-5">
																		<div class="form-group">
																			<label for="">{{ __('backend/management.products.edit.amount') }}</label>
																			<input type="text" class="form-control product-tiered-amount" name="product_edit_tiered_amount[]" value="{{$price->amount}}" />
																		</div>
																	</div>
																	<div class="col-5">
																		<div class="form-group">
																			<label for="">{{ __('backend/management.products.edit.price') }}</label>
																			<input type="number" class="form-control product-tiered-price" name="product_edit_tiered_price[]" value="{{$price->price}}" />
																		</div>
																	</div>
																	<div class="col-2">
																		<a class="delete-tiered cursor-pointer"><i class="la la-trash"></i></a>
																	</div>
																</div>
																@endforeach
															@else
															<div class="tiered-item row">
																<div class="col-5">
																	<div class="form-group">
																		<label for="">{{ __('backend/management.products.edit.amount') }}</label>
																		<input type="text" class="form-control product-tiered-amount" name="product_edit_tiered_amount[]" />
																	</div>
																</div>
																<div class="col-5">
																	<div class="form-group">
																		<label for="">{{ __('backend/management.products.edit.price') }}</label>
																		<input type="number" class="form-control product-tiered-price" name="product_edit_tiered_price[]" />
																	</div>
																</div>
																<div class="col-2">
																	<a class="delete-tiered cursor-pointer"><i class="la la-trash"></i></a>
																</div>
															</div>
															@endif
														</div>
														<div class="col-3">
															<button class="btn btn-wide btn-bold btn-primary" id="add_tiered_btn" type="button" style="margin-top:22px">Add</button>
														</div>
													</div>
												</div>
												{{-- <div class="mt-4">
													<label for="address">Price without decimals</label>
													<select class="form-select custom-select" aria-label="Default select example">
														<option selected>23.56</option>
														<option value="1">10.22</option>
														<option value="2">22.4</option>
														<option value="3">12</option>
													</select>
												</div>

												<div class="mt-4">
													<label for="address">Regular price without decimals - optional</label>
													<select class="form-select custom-select" aria-label="Default select example">
														<option selected>23.56</option>
														<option value="1">10</option>
														<option value="2">10</option>
														<option value="3">10</option>
													</select>
												</div>

												<div class="mt-4">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
														<label class="form-check-label" for="flexCheckDefault">
															Enable Stock Management
														</label>
													</div>
												</div> --}}


												<div class="mt-4">
													<button type="submit" class="btn-go-to-shop m-0">{{ __('backend/management.products.edit.submit_button') }}</button>
												</div>
											</form>
										</div>
									</div>
									<!-- End Canvas Edit -->

									<!-- Canvas Add -->
									<div class="offcanvas offcanvas-end canvas-edit" tabindex="-1" id="add-product" aria-labelledby="offcanvasTopLabel">
										<!-- header-canvas-add -->
										<div class="offcanvas-header canvas-header row">
											<div class="d-flex">
												<div class="d-none d-md-block">
													<svg class="btn-close-canvas" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
														xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
														<path d="M23.75 15H6.25" stroke="white" stroke-width="2" stroke-linecap="round"
															stroke-linejoin="round" />
														<path d="M15 23.75L6.25 15L15 6.25" stroke="white" stroke-width="2" stroke-linecap="round"
															stroke-linejoin="round" />
													</svg>
												</div>

												<div>
													<p class="name-canvas">{{ __('backend/management.products.add.title') }}</p>
												</div>

												<div>

												</div>
											</div>
											<div class="col-1 d-md-none">
												<svg data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" xmlns="http://www.w3.org/2000/svg"
													width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path
														d="M6.7072 5.29289C6.31668 4.90237 5.68351 4.90237 5.29299 5.29289C4.90246 5.68342 4.90246 6.31658 5.29299 6.70711L10.5858 12L5.29289 17.2929C4.90237 17.6834 4.90237 18.3166 5.29289 18.7071C5.68342 19.0976 6.31658 19.0976 6.70711 18.7071L12 13.4142L17.293 18.7071C17.6835 19.0976 18.3167 19.0976 18.7072 18.7071C19.0977 18.3166 19.0977 17.6834 18.7072 17.2929L13.4143 12L18.7071 6.70711C19.0976 6.31658 19.0976 5.68342 18.7071 5.29289C18.3166 4.90237 17.6834 4.90237 17.2929 5.29289L12 10.5857L6.7072 5.29289Z"
														fill="#6F767E" />
												</svg>
											</div>
										</div>
										<!-- body-canvas-edit -->
										<div class="offcanvas-body">
                                            <form method="post" class="kt-form" action="{{ route('backend-management-product-add-form') }}" enctype="multipart/form-data">
                                                @csrf
                                                {{-- @if($lang != null)
                                                <input type="hidden" name="translation_lng" value="{{ strtolower($lang) }}" />
                                                @endif --}}
                                                <input type="hidden" name="product_add_id" value="{{ $product->id }}" />
                                                <div class="mt-4">
                                                    <div>
                                                        <label for="product_add_name">{{ __('backend/management.products.name') }}</label>
                                                        <input type="text" class="form-control @if($errors->has('product_add_name')) is-invalid @endif" id="product_add_name" name="product_add_name" placeholder="{{ __('backend/management.products.name') }}" value="{{ \App\Classes\LangHelper::getValue($lang, 'product', 'name', $product->id) ?? $product->name }}" />
                                            
                                                        @if($errors->has('product_add_name'))
                                                        <span class="invalid-feedback" style="display:block" role="alert">
                                            																<strong>{{ $errors->first('product_add_name') }}</strong>
                                            															</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <div>
                                                        <label for="address" class="d-none d-md-block">Product Image</label>
                                                        <input type="file" class="form-control" id="product_img_add" name="product_img[]" accept="image/*" multiple style="display:none;">
                                                        <div class="p-3 custom-choose-file row">
                                                            <div class="col-12 d-flex justify-content-center">
                                                                <svg class="ic-choose" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                                     viewBox="0 0 28 28" fill="none">
                                                                    <g clip-path="url(#clip0_1_7613)">
                                                                        <path
                                                                            d="M27.9866 11.3457C27.9638 10.8694 27.6014 10.4908 27.121 10.4241C26.7171 10.3687 26.2652 10.6537 26.1154 11.0657C26.051 11.2399 26.047 11.4231 26.0478 11.6071C26.0486 13.9886 26.0486 16.3693 26.047 18.7508C26.047 18.8672 26.0771 18.9902 26.0014 19.1367C25.8906 19.0146 25.7897 18.9079 25.6928 18.7972C24.065 16.936 22.4381 15.0731 20.8095 13.2135C19.1695 11.3392 16.6583 11.3384 15.0159 13.2102C13.8954 14.4877 12.7733 15.7644 11.6634 17.0508C11.503 17.2364 11.4322 17.2226 11.2897 17.0402C10.9395 16.5908 10.5821 16.1454 10.2018 15.722C9.29388 14.7124 8.15958 14.3151 6.82008 14.5471C5.97729 14.6929 5.27945 15.1122 4.73144 15.7684C3.82514 16.8521 2.92617 17.9415 1.97427 19.0895C1.9645 18.9405 1.95635 18.8721 1.95635 18.8029C1.95554 14.6001 1.95635 10.398 1.95554 6.19518C1.95554 5.78564 2.00684 5.38425 2.12491 4.99099C2.67537 3.15336 4.29579 1.95895 6.26962 1.95569C9.64809 1.94999 13.0274 1.95406 16.4058 1.95488C16.6526 1.95488 16.8944 1.94022 17.1118 1.80588C17.4937 1.56895 17.6672 1.12359 17.5426 0.695324C17.4156 0.258103 17.0442 0.00163347 16.515 0.00163347C13.0754 -0.000809102 9.63506 0.00163347 6.19552 5.08822e-06C5.53921 -0.000809102 4.89918 0.0960795 4.27462 0.297185C1.69578 1.1301 0.00695661 3.48067 0.00369947 6.27416C-0.00281481 11.4434 0.00125661 16.6127 0.00125661 21.7829C0.00125661 22.1899 0.028128 22.5954 0.110371 22.996C0.727599 25.9824 3.19651 27.9919 6.28428 27.9959C11.424 28.0033 16.5638 27.9984 21.7036 27.9984C22.1311 27.9984 22.5569 27.9764 22.9779 27.8901C25.9574 27.2778 27.9882 24.7962 27.9907 21.756C27.9939 18.5505 27.9915 15.345 27.9915 12.1396C27.9915 11.875 27.9996 11.6095 27.9866 11.3457ZM25.9436 22.317C25.6415 24.5096 23.9087 26.0378 21.6962 26.0427C19.1207 26.0484 16.5459 26.0443 13.9711 26.0443C11.3955 26.0443 8.82078 26.0508 6.24601 26.0419C4.05395 26.0346 2.33581 24.5397 1.99951 22.3788C1.9759 22.225 1.9987 22.1102 2.09885 21.988C3.44568 20.3556 4.78192 18.7142 6.13445 17.0866C6.83636 16.2423 8.03336 16.2512 8.74342 17.0907C9.35413 17.8137 9.95263 18.5464 10.5576 19.2743C11.0731 19.8947 11.7009 19.9045 12.2367 19.2922C13.6641 17.6606 15.09 16.0282 16.5141 14.3941C17.01 13.825 17.6199 13.623 18.3504 13.8184C18.6842 13.9072 18.9505 14.1067 19.1777 14.3656C21.3933 16.8896 23.609 19.4119 25.8287 21.9327C25.933 22.0499 25.9655 22.1606 25.9436 22.317Z"
                                                                            fill="#7D7D7D" />
                                                                        <path
                                                                            d="M25.9448 22.317C25.6427 24.5096 23.9099 26.0378 21.6975 26.0427C19.1219 26.0484 16.5471 26.0443 13.9724 26.0443C11.3968 26.0443 8.82201 26.0508 6.24724 26.0419C4.05519 26.0346 2.33704 24.5397 2.00074 22.3788C1.97713 22.225 1.99993 22.1102 2.10009 21.988C3.44691 20.3556 4.78316 18.7142 6.13568 17.0866C6.8376 16.2423 8.0346 16.2512 8.74465 17.0907C9.35537 17.8137 9.95387 18.5464 10.5589 19.2743C11.0743 19.8947 11.7021 19.9045 12.2379 19.2922C13.6654 17.6606 15.0912 16.0282 16.5154 14.3941C17.0113 13.825 17.6212 13.623 18.3516 13.8184C18.6854 13.9072 18.9517 14.1067 19.1789 14.3656C21.3946 16.8896 23.6102 19.4119 25.83 21.9327C25.9342 22.0499 25.9668 22.1606 25.9448 22.317Z"
                                                                            fill="#7D7D7D" />
                                                                        <path
                                                                            d="M25.6996 3.90812C26.1271 3.90812 26.5546 3.90323 26.9813 3.90974C27.5757 3.91789 27.9902 4.30707 28.0008 4.85583C28.0114 5.4217 27.6018 5.84833 27 5.8581C26.1459 5.87194 25.2909 5.8752 24.4367 5.85485C24.146 5.84833 24.0833 5.94441 24.089 6.21553C24.1053 7.03949 24.0979 7.86345 24.0939 8.68741C24.0906 9.32085 23.7022 9.75563 23.1379 9.76784C22.576 9.78006 22.1461 9.32004 22.142 8.68741C22.1363 7.86345 22.1249 7.03949 22.1485 6.21553C22.1575 5.90777 22.0565 5.84833 21.7731 5.85485C20.9393 5.87357 20.1047 5.87031 19.2708 5.8581C18.5714 5.84833 18.1129 5.27758 18.2717 4.63926C18.38 4.2053 18.7342 3.91626 19.2057 3.91137C20.0705 3.9016 20.9352 3.89346 21.7992 3.91463C22.094 3.92196 22.151 3.821 22.1461 3.55313C22.1306 2.70881 22.1347 1.8645 22.1436 1.02018C22.1493 0.488518 22.4791 0.0871218 22.9441 0.0130305C23.431 -0.0643176 23.8675 0.188081 24.0393 0.640771C24.0955 0.78814 24.0939 0.939579 24.0939 1.09183C24.0955 1.92556 24.1053 2.76011 24.0882 3.59384C24.0833 3.85601 24.1704 3.92277 24.4171 3.91137C24.8446 3.89509 25.2721 3.90812 25.6996 3.90812Z"
                                                                            fill="#7D7D7D" />
                                                                        <path
                                                                            d="M3.91217 7.49056C3.90077 5.52266 5.50003 3.91138 7.46815 3.90894C9.45012 3.9065 11.0575 5.48602 11.0697 7.44985C11.0819 9.43892 9.48839 11.0567 7.50887 11.0657C5.52201 11.0754 3.92438 9.48696 3.91217 7.49056ZM5.8689 7.46369C5.85994 8.37396 6.57244 9.1051 7.47467 9.11161C8.36142 9.11731 9.09916 8.40327 9.11545 7.52232C9.13255 6.61694 8.41598 5.87358 7.51864 5.86462C6.60012 5.85567 5.87867 6.55587 5.8689 7.46369Z"
                                                                            fill="#7D7D7D" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_1_7613">
                                                                            <rect width="28" height="28" fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </div>
                                                            <div class="col-12 d-flex justify-content-center mt-2">
                                                                {{-- <span class="text-white">Drag your file here or</span>  --}}
                                                                <span class="text-green browse_file" data-file="#product_img_add" style="cursor: pointer;">Browse</span>
                                                            </div>
                                            
                                                            <div class="col-12 d-flex justify-content-center mt-2">
                                                                <span class="text-desc">Maximum image size 50mb</span>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4 justify-content-center">
                                                            @foreach($product->getImages() as $img)
                                                            <div class="col-sm-6 product-img-item" data-img_id="{{ $img->id }}">
                                                                <img src="{{ '/files/' . $img->img_path }}" class="product-img @if($img->is_main) selected @endif" data-img_path="{{ $img->img_path }}">
                                                                <span class="delete-img-btn"><i class="la la-trash"></i></span>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        @if($product->getMainImage())
                                                        <input type="hidden" name="main_img_name" id="main_img_name" value="{{$product->getMainImage()->img_path}}">
                                                        @else
                                                        <input type="hidden" name="main_img_name" id="main_img_name" value="">
                                                        @endif
                                                        <input type="hidden" name="main_img_index" id="main_img_index" value="-1">
                                                        <input type="hidden" name="deleted_img_ids" id="deleted_img_ids" value="">
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <label for="product_add_short_description">{{ __('backend/management.products.short_description') }}</label>
                                                    <input type="text" class="form-control @if($errors->has('product_add_short_description')) is-invalid @endif" id="product_add_short_description" name="product_add_short_description" placeholder="{{ __('backend/management.products.short_description') }}" value="{{ \App\Classes\LangHelper::getValue($lang, 'product', 'short_description', $product->id) ?? (strlen($product->short_description) > 0 ? decrypt($product->short_description) : '') }}" />
                                            
                                                    @if($errors->has('product_add_short_description'))
                                                    <span class="invalid-feedback" style="display:block" role="alert">
                                            															<strong>{{ $errors->first('product_add_short_description') }}</strong>
                                            														</span>
                                                    @endif
                                                </div>
                                                <div class="mt-4">
                                                    <label for="product_add_category_id">{{ __('backend/management.products.category') }}</label>
                                                    <select name="product_add_category_id" id="product_add_category_id" class="form-control custom-select @if($errors->has('product_add_category_id')) is-invalid @endif">
                                                        <option value="0">{{ __('backend/main.please_choose') }}</option>
                                                        @foreach(App\Models\ProductCategory::all() as $productCategory)
                                                        <option value="{{ $productCategory->id }}" @if($product->category_id == $productCategory->id) selected @endif>{{ $productCategory->name }}</option>
                                                        @endforeach
                                                    </select>
                                            
                                                    @if($errors->has('product_add_category_id'))
                                                    <span class="invalid-feedback" style="display:block;" role="alert">
                                            															<strong>{{ $errors->first('product_add_category_id') }}</strong>
                                            														</span>
                                                    @endif
                                                </div>
                                            
                                                <div class="mt-4">
                                                    <div>
                                                        <label for="product_add_description">{{ __('backend/management.products.description') }}</label>
                                                        <textarea style="height: unset" class="text-editor form-control @if($errors->has('product_add_description')) is-invalid @endif" id="product_add_description" name="product_add_description" placeholder="{{ __('backend/management.products.description') }}">{{ \App\Classes\LangHelper::getValue($lang, 'product', 'description', $product->id) ?? (strlen($product->description) > 0 ? decrypt($product->description) : '') }}</textarea>
                                            
                                                        @if($errors->has('product_add_description'))
                                                        <span class="invalid-feedback" style="display:block" role="alert">
                                            																<strong>{{ $errors->first('product_add_description') }}</strong>
                                            															</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            
                                                <div class="mt-4">
                                                    <label class="k-radio k-radio--all k-radio--solid">
                                                        <input type="radio" name="product_add_stock_management" value="variants" @if($product->asVariant()) checked @endif />
                                                        <span></span>
                                                        {{ __('backend/management.products.add.variant') }}
                                                    </label>
                                                </div>
                                                <div class="mt-4">
                                                    <label class="k-radio k-radio--all k-radio--solid">
                                                        <input type="radio" name="product_add_stock_management" value="tiered" @if($product->asTiered()) checked @endif />
                                                        <span></span>
                                                        {{ __('backend/management.products.edit.tiered') }}
                                                    </label>
                                                </div>
                                                <div class="product_add_variant_div"  style="@if(!$product->asVariant()) display: none; @endif">
                                                    <div class="row">
                                                        <div class="col-9 variant-wrapper">
                                                            @if(count($product->variants) > 0)
                                                            @foreach($product->variants as $variant)
                                                            <div class="variant-item row">
                                                                <div class="col-5">
                                                                    <div class="form-group">
                                                                        <label for="">{{ __('backend/management.products.title') }}</label>
                                                                        <input type="text" class="form-control product-variant-title" name="product_add_variant_title[]" value="{{$variant->title}}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-5">
                                                                    <div class="form-group">
                                                                        <label for="">{{ __('backend/management.products.price') }}</label>
                                                                        <input type="number" step="any" class="form-control product-variant-price" name="product_add_variant_price[]" value="{{$variant->price}}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-2">
                                                                    <a class="delete-variant cursor-pointer"><i class="la la-trash"></i></a>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            @else
                                                            <div class="variant-item row">
                                                                <div class="col-5">
                                                                    <div class="form-group">
                                                                        <label for="">{{ __('backend/management.products.title') }}</label>
                                                                        <input type="text" class="form-control product-variant-title" name="product_add_variant_title[]" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-5">
                                                                    <div class="form-group">
                                                                        <label for="">{{ __('backend/management.products.price') }}</label>
                                                                        <input type="number" step="any" class="form-control product-variant-price" name="product_add_variant_price[]" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-2">
                                                                    <a class="delete-variant cursor-pointer"><i class="la la-trash"></i></a>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </div>
                                                        <div class="col-3">
                                                            <button class="btn btn-wide btn-bold btn-primary" id="add_variant_btn" type="button" style="margin-top:22px">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product_add_tiered_div"  style="@if(!$product->asTiered()) display: none; @endif">
                                                    <div class="row">
                                                        <div class="col-9 tiered-wrapper">
                                                            @if(count($product->tieredPrices) > 0)
                                                            @foreach($product->tieredPrices as $price)
                                                            <div class="tiered-item row">
                                                                <div class="col-5">
                                                                    <div class="form-group">
                                                                        <label for="">{{ __('backend/management.products.edit.amount') }}</label>
                                                                        <input type="text" class="form-control product-tiered-amount" name="product_add_tiered_amount[]" value="{{$price->amount}}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-5">
                                                                    <div class="form-group">
                                                                        <label for="">{{ __('backend/management.products.edit.price') }}</label>
                                                                        <input type="number" class="form-control product-tiered-price" name="product_add_tiered_price[]" value="{{$price->price}}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-2">
                                                                    <a class="delete-tiered cursor-pointer"><i class="la la-trash"></i></a>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                            @else
                                                            <div class="tiered-item row">
                                                                <div class="col-5">
                                                                    <div class="form-group">
                                                                        <label for="">{{ __('backend/management.products.edit.amount') }}</label>
                                                                        <input type="text" class="form-control product-tiered-amount" name="product_add_tiered_amount[]" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-5">
                                                                    <div class="form-group">
                                                                        <label for="">{{ __('backend/management.products.edit.price') }}</label>
                                                                        <input type="number" class="form-control product-tiered-price" name="product_add_tiered_price[]" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-2">
                                                                    <a class="delete-tiered cursor-pointer"><i class="la la-trash"></i></a>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </div>
                                                        <div class="col-3">
                                                            <button class="btn btn-wide btn-bold btn-primary" id="add_tiered_btn" type="button" style="margin-top:22px">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="mt-4">
                                                    <label for="address">Price without decimals</label>
                                                    <select class="form-select custom-select" aria-label="Default select example">
                                                        <option selected>23.56</option>
                                                        <option value="1">10.22</option>
                                                        <option value="2">22.4</option>
                                                        <option value="3">12</option>
                                                    </select>
                                                </div>
                                            
                                                <div class="mt-4">
                                                    <label for="address">Regular price without decimals - optional</label>
                                                    <select class="form-select custom-select" aria-label="Default select example">
                                                        <option selected>23.56</option>
                                                        <option value="1">10</option>
                                                        <option value="2">10</option>
                                                        <option value="3">10</option>
                                                    </select>
                                                </div>
                                            
                                                <div class="mt-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Enable Stock Management
                                                        </label>
                                                    </div>
                                                </div> --}}
                                            
                                            
                                                <div class="mt-4">
                                                    <button type="submit" class="btn-go-to-shop m-0">{{ __('backend/management.products.edit.submit_button') }}</button>
                                                </div>
                                            </form>
										</div>
								</td>
							</tr>
						@endforeach
					</table>
					@else
						<i>{{ __('backend/main.no_entries') }}</i>
					@endif

					
				</div>
				<div class="col-lg-12 d-block d-md-none">
					<button class="btn-load-more mt-2">Load more</button>
				</div>
			</div>
		</div>

		@if($products->total()>0)
		<!-- pagination & info -->
		<div class="col-lg-12 d-none d-md-block">
			<div class="bg-secondary rounded-2 p-3 d-flex justify-content-between align-items-center">
				<div class="f-flex info-paginition">
					Showing <span class="info-paginition-span">{{ $products->firstItem() }} to {{ $products->lastItem() }}</span> of
					<span class="info-paginition-span">{{$products->total()}}</span> entries
				</div>
				<!-- pagination -->
				<div>
					{!! preg_replace('/' . $products->currentPage() . '\?page=/', '', $products->links()) !!}
					{{-- <nav aria-label="Page navigation example">
						<ul class="pagination d-flex align-items-center">
							<li class="page-item">
								<a class="arow-pagination-prev" href="#" aria-label="Previous">
									<svg xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13"
										fill="none">
										<path
											d="M7.59963e-08 6.62708C7.22201e-08 6.94375 0.158333 7.26042 0.316666 7.41875L5.54167 12.6437C6.01667 13.1188 6.80833 13.1188 7.28333 12.6438C7.75833 12.1687 7.75833 11.3771 7.28333 10.9021L3.00833 6.62708L7.28333 2.35208C7.75833 1.87708 7.75833 1.08541 7.28333 0.610415C6.80833 0.135414 6.01667 0.135414 5.54167 0.610415L0.475 5.67708C0.158334 5.99375 7.97725e-08 6.31042 7.59963e-08 6.62708Z"
											fill="#7D7D7D" />
									</svg>
								</a>
							</li>
							<li class="page-item">
								<a class="pagi-page pagi-page-active" href="">1</a>
							</li>
							<li class="page-item">
								<a class="pagi-page" href="">2</a>
							</li>
							<li class="page-item">
								<a class="pagi-page" href="">3</a>
							</li>
							<span class="pagi-page">...</span>
							<li class="page-item">
								<a class="pagi-page" href="">10</a>
							</li>
							<li class="page-item">
								<a class="arow-pagination-next" href="#" aria-label="Next">
									<svg xmlns="http://www.w3.org/2000/svg" width="9" height="13" viewBox="0 0 9 13"
										fill="none">
										<path
											d="M8.19336 6.37292C8.19336 6.05625 8.03503 5.73958 7.87669 5.58125L2.65169 0.35625C2.17669 -0.11875 1.38503 -0.11875 0.910026 0.35625C0.435026 0.83125 0.435026 1.62292 0.910026 2.09792L5.18503 6.37292L0.910026 10.6479C0.435026 11.1229 0.435026 11.9146 0.910026 12.3896C1.38503 12.8646 2.17669 12.8646 2.65169 12.3896L7.71836 7.32292C8.03503 7.00625 8.19336 6.68958 8.19336 6.37292Z"
											fill="#7D7D7D" />
									</svg>
								</a>
							</li>
						</ul>
					</nav> --}}
				</div>
			</div>
		</div>
		@endif
	</div>
</div>

@endsection

@section('page_scripts')
	<script>
		$(document).ready(function(){
			$(".browse_file").click(function(){
				var fileInput=$(this).attr('data-file');
				$(fileInput).click();
			});
		});

		$(function() {
		// $('textarea.text-editor').froalaEditor({
		// 	toolbarSticky: false,
		// 	language: 'de',
      	// 	theme: 'gray',
		// 	toolbarButtons: ['undo', 'redo' , '|', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '|', 'align', '|', 'fontFamily', 'fontSize', 'color', '|', 'emoticons', '|', 'insertLink', 'insertImage', '|', 'outdent', 'indent', 'clearFormatting', 'insertTable', 'html']
		// });

		$('input[data-content-visible]').change(function() {
			$('.product_add_variant_div').hide();
			if($(this).attr('data-content-visible') == 'true' && $(this).is(':checked')) {
				$('.product_add_content_div').show();
			} else {
				$('.product_add_content_div').hide();
			}
		});

		$('input[data-weight-visible]').change(function() {
			$('.product_add_variant_div').hide();
			if($(this).attr('data-weight-visible') == 'true' && $(this).is(':checked')) {
				$('.product_add_weight_div').show();
			} else {
				$('.product_add_weight_div').hide();
			}
		});

		// added by Khamid
		$('input[name="product_add_stock_management"]').change(function() {
			
			if($(this).val() == "variants"){
				$('.product_add_weight_div').hide();
				$('.product_add_content_div').hide();
				$('.product_add_tiered_div').hide();
				$('.product_add_variant_div').show();

				// set base product price as 0 and make it disabled
				$("#product_add_price_in_cent").val(0).attr("disabled", true);
				$("#product_add_old_price_in_cent").val(0).attr("disabled", true);
			} else if($(this).val() == "tiered") {
				$('.product_add_weight_div').hide();
				$('.product_add_content_div').hide();
				$('.product_add_variant_div').hide();
				$('.product_add_tiered_div').show();

				// set base product price as 0 and make it disabled
				$("#product_add_price_in_cent").val(0).attr("disabled", true);
				$("#product_add_old_price_in_cent").val(0).attr("disabled", true);
			} else {
				$("#product_add_price_in_cent").removeAttr("disabled");
				$("#product_add_old_price_in_cent").removeAttr("disabled");
			}
		})

		$("#add_variant_btn").on("click", function(){
			let html = $(".variant-item:first").clone(true).appendTo('.variant-wrapper');
			$(".variant-item:last").find("input").map(function(){
				$(this).val("");
			});
		})

		$("#add_tiered_btn").on("click", function(){
			let html = $(".tiered-item:first").clone(true).appendTo('.tiered-wrapper');
			$(".tiered-item:last").find("input").map(function(){
				$(this).val("");
			});
		})

		$(".delete-variant").on("click", function(){
			if($(".variant-item").length == 1){
				return;
			}
			$(this).parents(".variant-item").remove();
		})

		$(".delete-tiered").on("click", function(){
			if($(".tiered-item").length == 1){
				return;
			}
			$(this).parents(".tiered-item").remove();
		})

		// image display 
		$("#product_img").on('change', function () {
			if(this.files.length == 0) {
				removeAllPictures();
				return;
			}
			if(this.files.length > 3){
				alert("You can only upload 3 files");
				$(this).val(''); 
				return;
			}

			displayPicture(this);
		});

		var displayPicture = function(input) {
			$(".product-img").remove();
			if (input.files) {
				var filesAmount = input.files.length;

				for (i = 0; i < filesAmount; i++) {
					if(i > 2)
						break;
					var reader = new FileReader();

					reader.onload = function(event) {
						$($.parseHTML('<img>')).attr('src', event.target.result).attr('class', 'product-img').appendTo(".product-imgs-preview");
						
						product_img_click_listener();
						select_first_img();
					}

					reader.readAsDataURL(input.files[i]);
				}
			}
			
		};

		var removeAllPictures = function(input) {
			$(input).val('');
			$(".product-img").remove();
		}

		var product_img_click_listener = function(){
			$(".product-img").on("click", function(){
				$(".product-img").removeClass("selected");
				$(this).addClass("selected");
				$("#main_img_index").val($(this).index() - 1);
			})
		}

		function select_first_img() {
			$(".product-img:first").trigger("click");
		}
  	});
	</script>
@endsection