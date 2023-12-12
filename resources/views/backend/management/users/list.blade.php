@extends('backend.layouts.default')
@section('title',__('backend/management.title'))
@section('content')
<div class="container-fluid"> <div class="row mt-4 g-md-3 g-3"> <!-- transaction -->
	<div class="col-lg-12"> <div class="bg-secondary rounded-2 p-3"> <div
		class="row d-flex align-items-center title-box-transaction">
		<div class="col-12 col-md-7">
		<p class="title-table-box">{{ __('backend/management.title') }}</p>
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
</div> <!-- table mobile -->
<div class="mt-30 table-mobile"> <!-- table item --> <div class="table-mb">
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
				d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865
				16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968
				3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088
				8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032
				12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486
				9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048
				5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138
				8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12
				16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544
				5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261
				19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013
				14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055
				17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888
				3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519
				3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123
				12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
				fill="#BBBBBB" />
				</svg>
				</div>
				<div>
					<svg class="btn-update" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
					fill="none">
					<path d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2
						20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391
						21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13" stroke="#BBBBBB" stroke-width="2"
						stroke-linecap="round" stroke-linejoin="round" />
					<path
					d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5
					2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5
					5.49998L12 15L8 16L9 12L18.5 2.49998Z"
					stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
					stroke-linejoin="round" />
					</svg>
				</div>
				<div>
				<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
				fill="none">
				<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
				stroke-linejoin="round" />
				<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2"
					stroke-linecap="round" stroke-linejoin="round" /> <path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6"
					stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
				<input class="form-check-input check-box-table" type="checkbox" value="" id="flexCheckDefault" />
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
					<svg class="btn-view" xmlns="http://www.w3.org/2000/svg" width="24" height="17" viewBox="0 0 24 17"
						fill="none">
						<path
							d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
							fill="#BBBBBB" />
					</svg>
				</div>
				<div>
					<svg class="btn-update" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
						<path
							d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
							stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path
							d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
							stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
				<div>
					<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
						<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
							stroke-linejoin="round" />
						<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
						<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
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
				<input class="form-check-input check-box-table" type="checkbox" value="" id="flexCheckDefault" />
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
					<svg class="btn-view" xmlns="http://www.w3.org/2000/svg" width="24" height="17" viewBox="0 0 24 17"
						fill="none">
						<path
							d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
							fill="#BBBBBB" />
					</svg>
				</div>
				<div>
					<svg class="btn-update" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
						<path
							d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
							stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path
							d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
							stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
				<div>
					<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
						<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
							stroke-linejoin="round" />
						<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
						<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
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
				<input class="form-check-input check-box-table" type="checkbox" value="" id="flexCheckDefault" />
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
					<svg class="btn-view" xmlns="http://www.w3.org/2000/svg" width="24" height="17" viewBox="0 0 24 17"
						fill="none">
						<path
							d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
							fill="#BBBBBB" />
					</svg>
				</div>
				<div>
					<svg class="btn-update" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
						<path
							d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
							stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path
							d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
							stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
				<div>
					<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
						<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
							stroke-linejoin="round" />
						<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
						<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
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
				<input class="form-check-input check-box-table" type="checkbox" value="" id="flexCheckDefault" />
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
					<svg class="btn-view" xmlns="http://www.w3.org/2000/svg" width="24" height="17" viewBox="0 0 24 17"
						fill="none">
						<path
							d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
							fill="#BBBBBB" />
					</svg>
				</div>
				<div>
					<svg class="btn-update" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
						<path
							d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
							stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path
							d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
							stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
				<div>
					<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
						<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
							stroke-linejoin="round" />
						<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
						<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
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
				<input class="form-check-input check-box-table" type="checkbox" value="" id="flexCheckDefault" />
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
					<svg class="btn-view" xmlns="http://www.w3.org/2000/svg" width="24" height="17" viewBox="0 0 24 17"
						fill="none">
						<path
							d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
							fill="#BBBBBB" />
					</svg>
				</div>
				<div>
					<svg class="btn-update" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
						<path
							d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
							stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path
							d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
							stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
				<div>
					<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
						<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
							stroke-linejoin="round" />
						<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
						<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
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
	@if(count($users))
	<table class="table mt-2 table-striped">
		<!-- title table pc -->
		<thead class="d-md-table-header-group table-header-pc">

			<tr>
				<th>
					<input class="form-check-input check-box-table" type="checkbox" value="" id="flexCheckDefault" />
				</th>
				<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.users.id') }} <span
						class="d-inline d-md-none">:</span></th>
				<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.users.username') }} <span
						class="d-inline d-md-none">:</span></th>
				<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.users.balance') }} <span
						class="d-inline d-md-none">:</span></th>
				<th scope="col" class="d-block d-md-table-cell">{{ __('backend/management.users.date') }} <span
						class="d-inline d-md-none">:</span></th>
				<th scope="col" class="d-block d-md-flex justify-content-end">{{ __('backend/management.users.actions')
					}} <span class="d-inline d-md-none">:</span></th>
			</tr>
		</thead>
		@foreach($users as $user)
		<tr>
			<td scope="row" class="d-block d-md-table-cell">
				<input class="form-check-input check-box-table" type="checkbox" value="" id="flexCheckDefault" />
			</td>
			<td scope="row" class="d-block d-md-table-cell">{{ $user->id }}</td>
			<td class="fs-20 d-block d-md-table-cell">{{ $user->username }}</td>
			<td class="fs-20 d-block d-md-table-cell">
				{{ $user->getFormattedBalance() }}
			</td>
			<td class="fs-20 d-block d-md-table-cell">
				{{ $user->created_at->format('d.m.Y H:i') }}
			</td>
			<td class="fs-20 d-block d-md-flex justify-content-end">
				<div class="d-flex">
					<div>
						<!-- <a href="{{ route('backend-management-user-edit', $user->id) }}"> -->
						<a href="#">
							<svg data-bs-toggle="offcanvas" data-bs-target="#edit-user_{{$user->id}}"
								aria-controls="edit-user" class="btn-update" xmlns="http://www.w3.org/2000/svg"
								viewBox="0 0 24 24" fill="none">
								<path
									d="M11 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13"
									stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path
									d="M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z"
									stroke="#BBBBBB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</a>
					</div>
					<div>
						<a href="{{ route('backend-management-user-delete', $user->id) }}">
							<svg class="btn-delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
								<path d="M3 6H21" stroke="#BBBBBB" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" />
								<path d="M19 6V20C19 21 18 22 17 22H7C6 22 5 21 5 20V6" stroke="#BBBBBB"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M8 6V4C8 3 9 2 10 2H14C15 2 16 3 16 4V6" stroke="#BBBBBB" stroke-width="2"
									stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</a>
					</div>
					<div>
						<a href="{{ route('backend-management-user-login', $user->id) }}">
							<svg class="btn-view" xmlns="http://www.w3.org/2000/svg" width="24" height="17"
								viewBox="0 0 24 17" fill="none">
								<path
									d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
									fill="#BBBBBB" />
							</svg>
						</a>
					</div>
					<!-- canvas edit -->
					<div class="offcanvas offcanvas-end canvas-edit" tabindex="-1" id="edit-user_{{$user->id}}"
						aria-labelledby="offcanvasTopLabel">
						<!-- header-canvas-edit -->
						<div class="offcanvas-header canvas-header row">
							<div class="d-flex col-md-4 col-11">
								<div class="d-none d-md-block">
									<svg class="btn-close-canvas" data-bs-toggle="offcanvas"
										data-bs-target="#offcanvasExample" xmlns="http://www.w3.org/2000/svg" width="30"
										height="30" viewBox="0 0 30 30" fill="none">
										<path d="M23.75 15H6.25" stroke="white" stroke-width="2" stroke-linecap="round"
											stroke-linejoin="round" />
										<path d="M15 23.75L6.25 15L15 6.25" stroke="white" stroke-width="2"
											stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</div>

								<div>
									<p class="name-canvas">{{ __('backend/management.users.edit.title') }}</p>
									<p class="desc-canvas">#{{$user->id}}</p>
								</div>
							</div>
							<div class="col-1 d-md-none">
								<svg data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
									xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path
										d="M6.7072 5.29289C6.31668 4.90237 5.68351 4.90237 5.29299 5.29289C4.90246 5.68342 4.90246 6.31658 5.29299 6.70711L10.5858 12L5.29289 17.2929C4.90237 17.6834 4.90237 18.3166 5.29289 18.7071C5.68342 19.0976 6.31658 19.0976 6.70711 18.7071L12 13.4142L17.293 18.7071C17.6835 19.0976 18.3167 19.0976 18.7072 18.7071C19.0977 18.3166 19.0977 17.6834 18.7072 17.2929L13.4143 12L18.7071 6.70711C19.0976 6.31658 19.0976 5.68342 18.7071 5.29289C18.3166 4.90237 17.6834 4.90237 17.2929 5.29289L12 10.5857L6.7072 5.29289Z"
										fill="#6F767E" />
								</svg>
							</div>
							
							<div class="d-flex justify-content-end gap-3 gap-md-2 col-md-8">
												<button class="btn-go-to-shop"><a href="{{ route('backend-management-user-tickets', $user->id) }}">Alle
									Tickets</a></button>
												<button class="btn-go-to-shop"><a href="{{ route('backend-management-user-orders', $user->id) }}">Alle
									Bestellungen</a></button>
							</div>
						
							<div class="offcanvas-body">
    							<div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
    								<div class="k-portlet k-portlet--height-fluid">
    									<div class="k-portlet__head  k-portlet__head--noborder">
    										<div class="k-portlet__head-label">
    											<h3 class="k-portlet__head-title">{{ __('backend/management.users.widget1.title') }}
    												<span class="h3">{{ App\Models\UserTransaction::where('user_id', $user->id)->count() }}</span>
    											</h3>
    											<h3 class="k-portlet__head-title"></h3>											
    										</div>
    									</div>
    								</div>
    							</div>
    
    							<div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
    								<div class="k-portlet k-portlet--height-fluid">
    									<div class="k-portlet__head  k-portlet__head--noborder">
    										<div class="k-portlet__head-label">
    											<h3 class="k-portlet__head-title">{{ __('backend/management.users.widget2.title') }}
    												<span class="h3">{{ App\Models\UserTicket::where('user_id', $user->id)->count() }}</span>
    											</h3>											
    										</div>
    									</div>
    								</div>
    							</div>
    							
    							<div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
    								<div class="k-portlet k-portlet--height-fluid">
    									<div class="k-portlet__head  k-portlet__head--noborder">
    										<div class="k-portlet__head-label">
    											<h3 class="k-portlet__head-title">{{ __('backend/management.users.widget3.title') }}
    												<span class="h3">{{ App\Models\UserOrder::where('user_id', $user->id)->count() }}</span>
    											</h3>											
    										</div>
    									</div>
    								</div>
    							</div>
    							
    							<div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
    								<div class="k-portlet k-portlet--height-fluid">
    									<div class="k-portlet__head  k-portlet__head--noborder">
    										<div class="k-portlet__head-label">
    											<h3 class="k-portlet__head-title">{{ __('backend/management.users.widget4.title') }}
    												<span class="h3">{{ App\Models\UserPermission::where('user_id', $user->id)->count() }}</span>
    											</h3>											
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>

						</div>
						<!-- body-canvas-edit -->
						<div class="offcanvas-body">
							<div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
								<div class="k-portlet">
									<div class="k-portlet__head k-portlet__head--lg k-portlet__head--noborder k-portlet__head--break-sm">
										<div class="k-portlet__head-label">
											<h3 class="k-portlet__head-title">
												Offene Tickets von {{ htmlspecialchars($user->username) }}
												<small>Insgesamt {{ count($user->tickets) }} offene Tickets</small>
											</h3>
										</div>
									</div>
									<!-- Tickets -->
									<div class="k-portlet__body">
										<div class="k-datatable k-datatable--default k-datatable--brand k-datatable--error k-datatable--loaded k-datatable--scroll" id="k_recent_tickets">
											<table class="table">
												<thead class="">
													<tr>
														<th>
															<span>#</span>
														</th>
														<th>
															<span>Betreff</span>
														</th>
														<th>
															<span>Status</span>
														</th>
														<th>
															<span>Datum</span>
														</th>
														<th style="text-align:right;">
															<span>Aktionen</span>
														</th>
													</tr>
												</thead>
												@if(count($user->tickets) > 0)
												<tbody>
													@foreach($user->tickets as $ticket)
													<tr>
														<td>
															{{ $ticket->id }}
														</td>
														<td>
															{{ htmlspecialchars($ticket->subject) }}
														</td>
														<td>
															@if($ticket->isClosed())
															<span class="kt-badge kt-badge--danger kt-badge--dot kt-badge--md"></span>
															<span class="kt-label-font-color-2 kt-font-bold">{{ __('backend/dashboard.recent_tickets.status_data.closed') }}</span>
															@elseif($ticket->isReplied())
															<span class="kt-badge kt-badge--brand kt-badge--dot kt-badge--md"></span>
															<span class="kt-label-font-color-2 kt-font-bold">{{ __('backend/dashboard.recent_tickets.status_data.replied') }}</span>
															@else
															<span class="kt-badge kt-badge--success kt-badge--dot kt-badge--md"></span>
															<span class="kt-label-font-color-2 kt-font-bold">{{ __('backend/dashboard.recent_tickets.status_data.open') }}</span>
															@endif
														</td>	
														<td>
															{{ $ticket->created_at->format('d.m.Y H:i') }}
														</td>
														<td style="text-align:right;">
															<a href="{{ route('backend-management-ticket-edit', $ticket->id) }}" class="btn btn-clean  btn-sm btn-icon-md">
																<i class="la la-edit"></i> {{ __('backend/dashboard.recent_tickets.edit') }}
															</a>
														</td>
													</tr>
													@endforeach
												</tbody>
												@endif
											</table>
										</div>
									</div>

								</div>
							</div>

							<div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
								<!-- User Information -->
								<div class="kt-portlet">
									<div class="kt-portlet__head">
										<div class="kt-portlet__head-label">
											<h3 class="kt-portlet__head-title">{{ __('backend/management.users.edit.title') }}</h3>
										</div>
									</div>
									<form method="post" class="kt-form" action="{{ route('backend-management-user-edit-form') }}">
										@csrf

										<input type="hidden" value="{{ $user->id }}" name="user_edit_id" />
										
										<div class="kt-portlet__body">
											<div class="kt-section kt-section--first">
												<div class="form-group">
													<label for="user_edit_name">{{ __('backend/management.users.name') }}</label>
													<input type="text" class="form-control @if($errors->has('user_edit_name')) is-invalid @endif" id="user_edit_name" name="user_edit_name" placeholder="{{ __('backend/management.users.name') }}" value="{{ $user->name }}" />

													@if($errors->has('user_edit_name'))
														<span class="invalid-feedback" style="display:block" role="alert">
															<strong>{{ $errors->first('user_edit_name') }}</strong>
														</span>
													@endif
												</div>
												
												<div class="form-group">
													<label for="user_edit_username">{{ __('backend/management.users.username') }}</label>
													<input type="text" class="form-control @if($errors->has('user_edit_username')) is-invalid @endif" id="user_edit_username" placeholder="{{ __('backend/management.users.username') }}" value="{{ $user->username }}" disabled="true" />
												</div>

												<div class="form-group">
													<label for="user_edit_balance">{{ __('backend/management.users.balance_in_cent') }}</label>
													<input type="number" class="form-control @if($errors->has('user_edit_balance')) is-invalid @endif" id="user_edit_balance" name="user_edit_balance" placeholder="{{ __('backend/management.users.balance') }}" value="{{ $user->balance_in_cent }}" />

													@if($errors->has('user_edit_balance'))
														<span class="invalid-feedback" style="display:block" role="alert">
															<strong>{{ $errors->first('user_edit_balance') }}</strong>
														</span>
													@endif
												</div>
											</div>
										</div>
										
										<div class="kt-portlet__foot">
										    <div class="mt-4 mb-4">
													<button type="submit" class="btn-go-to-shop m-0">{{ __('backend/management.users.edit.submit_button') }}</button>
											</div>
										</div>
									</form>
								</div>

								<!-- Access Rights -->
								@if(Auth::user()->hasPermission('manage_users_permissions'))
								<div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">{{ __('backend/management.users.edit.permissions.title') }}</h3>
											</div>
										</div>
										<form method="post" class="kt-form" action="{{ route('backend-management-user-update-permissions-form') }}">
											@csrf

											<input type="hidden" value="{{ $user->id }}" name="user_edit_id" />
											
											<div class="kt-portlet__body">
												<div class="kt-section kt-section--first">
													@foreach(App\Models\Permission::all() as $permission)
													<div class="form-group">
														<label class="k-checkbox k-checkbox--all k-checkbox--solid">
															<input type="checkbox" name="user_edit_permissions[]" value="{{ $permission->id }}" @if($user->hasPermission($permission->permission)) checked @endif />
															<span></span>
															@if(\Lang::has('backend/permissions.' . $permission->permission))
															{{ __('backend/permissions.' . $permission->permission) }}
															@else
															{{ $permission->permission }}
															@endif
														</label>
													</div>
													@endforeach
												</div>
											</div>
											<div class="kt-portlet__foot">
											    <div class="mt-4 mb-4">
													<button type="submit" class="btn-go-to-shop m-0">{{ __('backend/management.users.edit.save_button') }}</button>
											    </div>
											</div>
										</form>
									</div>
								</div>
								@endif
							</div>
						</div>
					</div>
					<!--  -->
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

@if($users->total()>0)
<!-- pagination & info -->
<div class="col-lg-12 d-none d-md-block">
	<div class="bg-secondary rounded-2 p-3 d-flex justify-content-between align-items-center">
		<div class="f-flex info-paginition">
			Showing <span class="info-paginition-span">{{ $users->firstItem() }} to {{ $users->lastItem() }}</span> of
			<span class="info-paginition-span">{{$users->total()}}</span> entries
		</div>
		<!-- pagination -->
		<div>
			{!! preg_replace('/' . $users->currentPage() . '\?page=/', '', $users->links()) !!}
		</div>
	</div>
</div>
@endif
</div>
</div>
@endsection

@section('page_scripts')

@endsection