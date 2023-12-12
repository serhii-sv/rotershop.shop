@extends('backend.layouts.default')
@section('title',"Mehrfach Bestellungen")
@section('content')
<div class="row mt-4 g-md-3 g-3">
	<!-- transaction -->
	<div class="col-lg-12">
		<div class="bg-secondary rounded-2 p-3">
			<div class="row d-flex align-items-center title-box-transaction">
				<div class="col-12 col-md-7">
					<p class="title-table-box">Mehrfach Bestellungen</p>
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
								<span>#0192</span>
							</div>
						</div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">Product :</div>
						<div class="value-table-mb">
							<span>iPhone 13 Pro</span>
						</div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">User :</div>
						<div class="value-table-mb"><span>Admin</span></div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">Date :</div>
						<div class="value-table-mb"><span>2020-05-03 08:14:01</span></div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">Amount :</div>
						<div class="value-table-mb">
							<span>02</span>
						</div>
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

				<div class="table-mb">
					<div class="row-table d-flex">
						<div class="value-table-mb">
							<div class="d-flex align-items-center">
								<span>#0192</span>
							</div>
						</div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">Product :</div>
						<div class="value-table-mb">
							<span>iPhone 13 Pro</span>
						</div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">User :</div>
						<div class="value-table-mb"><span>Admin</span></div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">Date :</div>
						<div class="value-table-mb"><span>2020-05-03 08:14:01</span></div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">Amount :</div>
						<div class="value-table-mb">
							<span>02</span>
						</div>
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
				<div class="table-mb">
					<div class="row-table d-flex">
						<div class="value-table-mb">
							<div class="d-flex align-items-center">
								<span>#0192</span>
							</div>
						</div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">Product :</div>
						<div class="value-table-mb">
							<span>iPhone 13 Pro</span>
						</div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">User :</div>
						<div class="value-table-mb"><span>Admin</span></div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">Date :</div>
						<div class="value-table-mb"><span>2020-05-03 08:14:01</span></div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">Amount :</div>
						<div class="value-table-mb">
							<span>02</span>
						</div>
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
				<div class="table-mb">
					<div class="row-table d-flex">
						<div class="value-table-mb">
							<div class="d-flex align-items-center">
								<span>#0192</span>
							</div>
						</div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">Product :</div>
						<div class="value-table-mb">
							<span>iPhone 13 Pro</span>
						</div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">User :</div>
						<div class="value-table-mb"><span>Admin</span></div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">Date :</div>
						<div class="value-table-mb"><span>2020-05-03 08:14:01</span></div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">Amount :</div>
						<div class="value-table-mb">
							<span>02</span>
						</div>
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
				<div class="table-mb">
					<div class="row-table d-flex">
						<div class="value-table-mb">
							<div class="d-flex align-items-center">
								<span>#0192</span>
							</div>
						</div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">Product :</div>
						<div class="value-table-mb">
							<span>iPhone 13 Pro</span>
						</div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">User :</div>
						<div class="value-table-mb"><span>Admin</span></div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">Date :</div>
						<div class="value-table-mb"><span>2020-05-03 08:14:01</span></div>
					</div>
					<div class="row-table d-flex">
						<div class="title-table-mb">Amount :</div>
						<div class="value-table-mb">
							<span>02</span>
						</div>
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
				@if(count($shoppings))
					<table class="table mt-2 table-striped">
						<!-- title table pc -->
						<thead class="d-md-table-header-group table-header-pc">
							<tr>
								<th scope="col" class="d-block d-md-table-cell">
									ID
								</th>
								<th scope="col" class="d-block d-md-table-cell">
									Benutzer
								</th>
								<th scope="col" class="d-block d-md-table-cell">
									Bestellungen
								</th>
								<th scope="col" class="d-block d-md-table-cell">
									Abgearbeitet
								</th>
								<th scope="col" class="d-block d-md-flex justify-content-end">
									Aktionen
								</th>
							</tr>
						</thead>
						@foreach($shoppings as $shopping)
							<tr>
								<td scope="row" class="d-block d-md-table-cell">
									{{ $shopping->id }}
								</td>
								<td class="fs-20 d-block d-md-table-cell">
									{{ $shopping->getUser()->name }}
								</td>
								<td class="fs-20 d-block d-md-table-cell">
									<span>{{ count($shopping->getOrders()) }}</span>
								</td>
								<td class="fs-20 d-block d-md-table-cell">{{ $shopping->isDone() ? 'Ja' : 'Nein' }}</td>
								<td class="fs-20 d-block d-md-flex justify-content-end">
									<div class="d-flex">
										@if(!$shopping->isDone()) 
											<div>
												<a href="{{ route('backend-shopping-done', $shopping->id) }}" style="text-decoration: none;
													color: #fff;">Als abgearbeitet markieren</a>
											</div>
										@endif
										<div>
											<a href="{{ route('backend-shopping-id', $shopping->id) }}">
												<svg class="btn-view" xmlns="http://www.w3.org/2000/svg" width="24" height="17"
												viewBox="0 0 24 17" fill="none">
													<path
														d="M12.0032 12.8081C13.276 12.8081 14.3569 12.3626 15.2458 11.4716C16.1347 10.5806 16.5791 9.49865 16.5791 8.22578C16.5791 6.95293 16.1336 5.87205 15.2426 4.98317C14.3516 4.09428 13.2697 3.64983 11.9968 3.64983C10.724 3.64983 9.6431 4.09534 8.75421 4.98634C7.86532 5.87733 7.42088 6.95926 7.42088 8.23214C7.42088 9.50499 7.86638 10.5859 8.75739 11.4747C9.64838 12.3636 10.7303 12.8081 12.0032 12.8081ZM11.9952 11.1427C11.1845 11.1427 10.497 10.859 9.93266 10.2915C9.36837 9.72397 9.08622 9.03486 9.08622 8.22414C9.08622 7.41342 9.36998 6.72591 9.93748 6.16162C10.505 5.59732 11.1941 5.31518 12.0048 5.31518C12.8155 5.31518 13.503 5.59893 14.0673 6.16644C14.6316 6.73394 14.9138 7.42306 14.9138 8.23378C14.9138 9.0445 14.63 9.73201 14.0625 10.2963C13.495 10.8606 12.8059 11.1427 11.9952 11.1427ZM12 16.4579C9.34387 16.4579 6.94344 15.6977 4.79871 14.1771C2.65397 12.6566 1.0544 10.6739 0 8.22896C1.0544 5.78403 2.65397 3.8013 4.79871 2.28078C6.94344 0.760261 9.34387 0 12 0C14.6561 0 17.0566 0.760261 19.2013 2.28078C21.346 3.8013 22.9456 5.78403 24 8.22896C22.9456 10.6739 21.346 12.6566 19.2013 14.1771C17.0566 15.6977 14.6561 16.4579 12 16.4579ZM11.996 14.6936C14.1688 14.6936 16.1651 14.1055 17.9848 12.9293C19.8045 11.7531 21.1903 10.1863 22.142 8.22896C21.1903 6.27161 19.8059 4.70483 17.9888 3.52862C16.1717 2.35241 14.1768 1.76431 12.004 1.76431C9.83117 1.76431 7.83492 2.35241 6.01519 3.52862C4.19547 4.70483 2.80075 6.27161 1.83106 8.22896C2.80075 10.1863 4.19415 11.7531 6.01123 12.9293C7.8283 14.1055 9.82324 14.6936 11.996 14.6936Z"
														fill="#BBBBBB" />
												</svg>
											</a>
										</div>
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

	@if($shoppings->total()>0)
		<!-- pagination & info -->
		<div class="col-lg-12 d-none d-md-block">
			<div class="bg-secondary rounded-2 p-3 d-flex justify-content-between align-items-center">
				<div class="f-flex info-paginition">
					Showing <span class="info-paginition-span">{{ $shoppings->firstItem() }} to {{ $shoppings->lastItem() }}</span> of
					<span class="info-paginition-span">{{$shoppings->total()}}</span> entries
				</div>
				<!-- pagination -->
				<div>
					{!! preg_replace('/' . $shoppings->currentPage() . '\?page=/', '', $shoppings->links()) !!}
				</div>
			</div>
		</div>
	@endif
</div>
@endsection

@section('page_scripts')

@endsection