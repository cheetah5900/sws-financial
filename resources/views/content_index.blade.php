<!--begin::Page-->
<div class="page d-flex flex-row flex-column-fluid">
	<!--begin::Aside-->
	<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
		<!--begin::Logo-->
		<div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
			<a href="../../demo9/dist/index.html">
				<img alt="Logo" src="{{asset('assets/media/logos/logo-demo9.svg')}}" class="h-40px" />
			</a>
		</div>
		<!--end::Logo-->
		<!--begin::Nav-->
		<div class="aside-menu flex-column-fluid pt-0 pb-7 py-lg-10" id="kt_aside_menu">
			<!--begin::Aside menu-->
			<div id="kt_aside_menu_wrapper" class="w-100 hover-scroll-overlay-y scroll-ps d-flex" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0">
				<div id="kt_aside_menu" class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-400 menu-arrow-gray-400 fw-bold fs-6 my-auto" data-kt-menu="true">
					<div class="menu-item py-3">
						<a class="menu-link active" href="../../demo9/dist/index.html" title="Dashboard" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
								<span class="svg-icon svg-icon-2x">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
										<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
										<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
										<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
						</a>
					</div>
					<div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-3">
						<span class="menu-link" title="Authentication Pages" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs037.svg-->
								<span class="svg-icon svg-icon-2x">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M2.10001 10C3.00001 5.6 6.69998 2.3 11.2 2L8.79999 4.39999L11.1 7C9.60001 7.3 8.30001 8.19999 7.60001 9.59999L4.5 12.4L2.10001 10ZM19.3 11.5L16.4 14C15.7 15.5 14.4 16.6 12.7 16.9L15 19.5L12.6 21.9C17.1 21.6 20.8 18.2 21.7 13.9L19.3 11.5Z" fill="black" />
										<path d="M13.8 2.09998C18.2 2.99998 21.5 6.69998 21.8 11.2L19.4 8.79997L16.8 11C16.5 9.39998 15.5 8.09998 14 7.39998L11.4 4.39998L13.8 2.09998ZM12.3 19.4L9.69998 16.4C8.29998 15.7 7.3 14.4 7 12.8L4.39999 15.1L2 12.7C2.3 17.2 5.7 20.9 10 21.8L12.3 19.4Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
						</span>
						<div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
							<div class="menu-item">
								<div class="menu-content">
									<span class="menu-section fs-5 fw-bolder ps-1 py-1">Authentication</span>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Basic</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/flows/basic/sign-in.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-in</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/flows/basic/sign-up.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-up</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/flows/basic/two-steps.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Two-steps</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/flows/basic/password-reset.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Reset</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/flows/basic/new-password.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Password</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Extended</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/extended/multi-steps-sign-up.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Multi-steps Sign-up</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/extended/free-trial-sign-up.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Free Trial Sign-up</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/extended/coming-soon.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Coming Soon</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/general/verify-email.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Verify Email</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/general/password-confirmation.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Confirmation</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">General</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-sub-lg-dropdown w-lg-225px px-lg-1 py-lg-4">
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/general/welcome.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Welcome</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/general/verify-email.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Verify Email</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/general/password-confirmation.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Confirmation</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/general/close-account.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Close Account</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/general/error-404.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Error 404</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/general/error-500.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Error 500</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Email</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-sub-lg-dropdown w-lg-225px px-lg-1 py-lg-4">
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/email/verify-email.html" target="blank">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Verify Email</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/email/password-reset.html" target="blank">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Reset</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo9/dist/authentication/email/password-change.html" target="blank">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Change</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-3">
						<span class="menu-link" title="Account Pages" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
								<span class="svg-icon svg-icon-2x">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
										<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
										<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
						</span>
						<div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
							<div class="menu-item">
								<div class="menu-content">
									<span class="menu-section fs-5 fw-bolder ps-1 py-1">Account</span>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/account/overview.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Overview</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/account/settings.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Settings</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/account/security.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Security</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/account/billing.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Billing</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/account/statements.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Statements</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/account/referrals.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Referrals</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/account/api-keys.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">API Keys</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-3">
						<span class="menu-link" title="Chat App" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
								<span class="svg-icon svg-icon-2x">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z" fill="black" />
										<path d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
						</span>
						<div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
							<div class="menu-item">
								<div class="menu-content">
									<span class="menu-section fs-5 fw-bolder ps-1 py-1">Chat</span>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/apps/chat/private.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Private Chat</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/apps/chat/group.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Group Chat</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/apps/chat/drawer.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Drawer Chat</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-3">
						<span class="menu-link" title="Customers App" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/maps/map002.svg-->
								<span class="svg-icon svg-icon-2x">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M8.7 4.19995L4 6.30005V18.8999L8.7 16.8V19L3.1 21.5C2.6 21.7 2 21.4 2 20.8V6C2 5.4 2.3 4.89995 2.9 4.69995L8.7 2.09998V4.19995Z" fill="black" />
										<path d="M15.3 19.8L20 17.6999V5.09992L15.3 7.19989V4.99994L20.9 2.49994C21.4 2.29994 22 2.59989 22 3.19989V17.9999C22 18.5999 21.7 19.1 21.1 19.3L15.3 21.8998V19.8Z" fill="black" />
										<path opacity="0.3" d="M15.3 7.19995L20 5.09998V17.7L15.3 19.8V7.19995Z" fill="black" />
										<path opacity="0.3" d="M8.70001 4.19995V2L15.4 5V7.19995L8.70001 4.19995ZM8.70001 16.8V19L15.4 22V19.8L8.70001 16.8Z" fill="black" />
										<path opacity="0.3" d="M8.7 16.8L4 18.8999V6.30005L8.7 4.19995V16.8Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
						</span>
						<div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
							<div class="menu-item">
								<div class="menu-content">
									<span class="menu-section fs-5 fw-bolder ps-1 py-1">Customers</span>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/apps/customers/getting-started.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Getting Started</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/apps/customers/list.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Customer Listing</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/apps/customers/view.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Customer Details</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-3">
						<span class="menu-link" title="Resources" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
								<span class="svg-icon svg-icon-2x">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
										<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
						</span>
						<div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
							<div class="menu-item">
								<div class="menu-content">
									<span class="menu-section fs-5 fw-bolder ps-1 py-1">Resources</span>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/documentation/base/utilities.html" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/layouts/lay009.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M20 14H11C10.4 14 10 13.6 10 13V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V13C21 13.6 20.6 14 20 14ZM21 20V17C21 16.4 20.6 16 20 16H11C10.4 16 10 16.4 10 17V20C10 20.6 10.4 21 11 21H20C20.6 21 21 20.6 21 20Z" fill="black" />
												<path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Components</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/documentation/getting-started.html" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
												<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Documentation</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo9/layout-builder.html" title="Build your layout, preview and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
												<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Layout Builder</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo9/dist/documentation/getting-started/changelog.html">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
												<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Changelog v8.0.29</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end::Aside menu-->
		</div>
		<!--end::Nav-->

		<!--begin::Footer-->
		<div class="aside-footer flex-column-auto pb-5 pb-lg-10" id="kt_aside_footer">
			<!--begin::Menu-->
			<div class="d-flex flex-center w-100 scroll-px" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Quick actions">
				<button type="button" class="btn btn-custom" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
					<span class="svg-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="black" />
							<path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="black" />
							<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</button>
				<!--begin::Menu 2-->
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu separator-->
					<div class="separator mb-3 opacity-75"></div>
					<!--end::Menu separator-->
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<a href="#" class="menu-link px-3">New Ticket</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<a href="#" class="menu-link px-3">New Customer</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
						<!--begin::Menu item-->
						<a href="#" class="menu-link px-3">
							<span class="menu-title">New Group</span>
							<span class="menu-arrow"></span>
						</a>
						<!--end::Menu item-->
						<!--begin::Menu sub-->
						<div class="menu-sub menu-sub-dropdown w-175px py-4">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">Admin Group</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">Staff Group</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3">Member Group</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu sub-->
					</div>
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<a href="#" class="menu-link px-3">New Contact</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu separator-->
					<div class="separator mt-3 opacity-75"></div>
					<!--end::Menu separator-->
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<div class="menu-content px-3 py-3">
							<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
						</div>
					</div>
					<!--end::Menu item-->
				</div>
				<!--end::Menu 2-->
			</div>
			<!--end::Menu-->
		</div>
		<!--end::Footer-->
	</div>
	<!--end::Aside-->
	<!--begin::Wrapper-->
	<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
		<!--begin::Header tablet and mobile-->
		<div class="header-mobile py-3">
			<!--begin::Container-->
			<div class="container d-flex flex-stack">
				<!--begin::Mobile logo-->
				<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
					<a href="../../demo9/dist/index.html">
						<img alt="Logo" src="{{asset('assets/media/logos/logo-demo9.svg')}}" class="h-35px" />
					</a>
				</div>
				<!--end::Mobile logo-->
				<!--begin::Aside toggle-->
				<button class="btn btn-icon btn-active-color-primary" id="kt_aside_toggle">
					<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
					<span class="svg-icon svg-icon-2x me-n1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
							<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</button>
				<!--end::Aside toggle-->
			</div>
			<!--end::Container-->
		</div>
		<!--end::Header tablet and mobile-->
		<!--begin::Header-->
		<div id="kt_header" class="header py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{lg: '300px'}">
			<!--begin::Container-->
			<div class="header-container container-xxl">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
					<!--begin::Heading-->
					<h1 class="d-flex flex-column text-dark fw-bolder my-1">
						<span class="text-white fs-1">รายการเบิกจ่าย</span>
					</h1>
					<!--end::Heading-->
				</div>
				<!--end::Page title=-->
				<!--begin::Wrapper-->
				<div class="d-flex align-items-center flex-wrap">
					<!--begin::Search-->
					<div class="header-search py-3 py-lg-0">
						<!--begin::Search-->
						<div id="kt_header_search" class="d-flex align-items-center" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start" data-kt-menu-flip="bottom">
							<!--begin::Form-->
							<form data-kt-search-element="form" class="w-100 position-relative me-3" autocomplete="off">
								<!--begin::Hidden input(Added to disable form autocomplete)-->
								<input type="hidden" />
								<!--end::Hidden input-->
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/general/gen004.svg-->
								<span class="svg-icon svg-icon-2 search-icon position-absolute top-50 translate-middle-y ms-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black" />
										<path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Input-->
								<input type="text" class="form-control custom-form-control ps-13" name="search" value="" placeholder="Find Goods" data-kt-search-element="input" />
								<!--end::Input-->
								<!--begin::Spinner-->
								<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
								</span>
								<!--end::Spinner-->
								<!--begin::Reset-->
								<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
											<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</span>
								<!--end::Reset-->
							</form>
							<!--end::Form-->
							<!--begin::Menu-->
							<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-350px py-7 px-7 overflow-hidden">
								<!--begin::Wrapper-->
								<div data-kt-search-element="wrapper">
									<!--begin::Recently viewed-->
									<div data-kt-search-element="results" class="d-none">
										<!--begin::Items-->
										<div class="scroll-y mh-200px mh-lg-350px">
											<!--begin::Category title-->
											<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
											<!--end::Category title-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<img src="{{asset('assets/media/avatars/150-1.jpg')}}" alt="" />
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-bold">
													<span class="fs-6 fw-bold">Karina Clark</span>
													<span class="fs-7 fw-bold text-muted">Marketing Manager</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<img src="{{asset('assets/media/avatars/150-3.jpg')}}" alt="" />
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-bold">
													<span class="fs-6 fw-bold">Olivia Bold</span>
													<span class="fs-7 fw-bold text-muted">Software Engineer</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<img src="{{asset('assets/media/avatars/150-8.jpg')}}" alt="" />
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-bold">
													<span class="fs-6 fw-bold">Ana Clark</span>
													<span class="fs-7 fw-bold text-muted">UI/UX Designer</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<img src="{{asset('assets/media/avatars/150-11.jpg')}}" alt="" />
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-bold">
													<span class="fs-6 fw-bold">Nick Pitola</span>
													<span class="fs-7 fw-bold text-muted">Art Director</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<img src="{{asset('assets/media/avatars/150-12.jpg')}}" alt="" />
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-bold">
													<span class="fs-6 fw-bold">Edward Kulnic</span>
													<span class="fs-7 fw-bold text-muted">System Administrator</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Category title-->
											<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
											<!--end::Category title-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<img class="w-20px h-20px" src="{{asset('assets/media/svg/brand-logos/volicity-9.svg')}}" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-bold">
													<span class="fs-6 fw-bold">Company Rbranding</span>
													<span class="fs-7 fw-bold text-muted">UI Design</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<img class="w-20px h-20px" src="{{asset('assets/media/svg/brand-logos/tvit.svg')}}" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-bold">
													<span class="fs-6 fw-bold">Company Re-branding</span>
													<span class="fs-7 fw-bold text-muted">Web Development</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<img class="w-20px h-20px" src="{{asset('assets/media/svg/misc/infography.svg')}}" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-bold">
													<span class="fs-6 fw-bold">Business Analytics App</span>
													<span class="fs-7 fw-bold text-muted">Administration</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<img class="w-20px h-20px" src="{{asset('assets/media/svg/brand-logos/leaf.svg')}}" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-bold">
													<span class="fs-6 fw-bold">EcoLeaf App Launch</span>
													<span class="fs-7 fw-bold text-muted">Marketing</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<img class="w-20px h-20px" src="{{asset('assets/media/svg/brand-logos/tower.svg')}}" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column justify-content-start fw-bold">
													<span class="fs-6 fw-bold">Tower Group Website</span>
													<span class="fs-7 fw-bold text-muted">Google Adwords</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Category title-->
											<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
											<!--end::Category title-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
																<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<span class="fs-6 fw-bold">Si-Fi Project by AU Themes</span>
													<span class="fs-7 fw-bold text-muted">#45670</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
																<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
																<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
																<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<span class="fs-6 fw-bold">Shopix Mobile App Planning</span>
													<span class="fs-7 fw-bold text-muted">#45690</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
																<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
																<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<span class="fs-6 fw-bold">Finance Monitoring SAAS Discussion</span>
													<span class="fs-7 fw-bold text-muted">#21090</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
																<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<span class="fs-6 fw-bold">Dashboard Analitics Launch</span>
													<span class="fs-7 fw-bold text-muted">#34560</span>
												</div>
												<!--end::Title-->
											</a>
											<!--end::Item-->
										</div>
										<!--end::Items-->
									</div>
									<!--end::Recently viewed-->
									<!--begin::Recently viewed-->
									<div data-kt-search-element="main">
										<!--begin::Heading-->
										<div class="d-flex flex-stack fw-bold mb-5">
											<!--begin::Label-->
											<span class="text-muted fs-6 me-2">Recently Searched</span>
											<!--end::Label-->
											<!--begin::Toolbar-->
											<div class="d-flex" data-kt-search-element="toolbar">
												<!--begin::Preferences toggle-->
												<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
													<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
															<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Preferences toggle-->
												<!--begin::Advanced search toggle-->
												<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Advanced search toggle-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Heading-->
										<!--begin::Items-->
										<div class="scroll-y mh-200px mh-lg-325px">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<!--begin::Svg Icon | path: icons/duotune/electronics/elc004.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z" fill="black" />
																<path opacity="0.3" d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z" fill="black" />
																<path opacity="0.3" d="M15 17H9V20H15V17Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">BoomApp by Keenthemes</a>
													<span class="fs-7 text-muted fw-bold">#45789</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="black" />
																<path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"Kept API Project Meeting</a>
													<span class="fs-7 text-muted fw-bold">#84050</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="black" />
																<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"KPI Monitoring App Launch</a>
													<span class="fs-7 text-muted fw-bold">#84250</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="black" />
																<path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Reference FAQ</a>
													<span class="fs-7 text-muted fw-bold">#67945</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black" />
																<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"FitPro App Development</a>
													<span class="fs-7 text-muted fw-bold">#84250</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="black" />
																<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Shopix Mobile App</a>
													<span class="fs-7 text-muted fw-bold">#45690</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Symbol-->
												<div class="symbol symbol-40px me-4">
													<span class="symbol-label bg-light">
														<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="black" />
																<path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div class="d-flex flex-column">
													<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"Landing UI Design" Launch</a>
													<span class="fs-7 text-muted fw-bold">#24005</span>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Items-->
									</div>
									<!--end::Recently viewed-->
									<!--begin::Empty-->
									<div data-kt-search-element="empty" class="text-center d-none">
										<!--begin::Icon-->
										<div class="pt-10 pb-10">
											<!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
											<span class="svg-icon svg-icon-4x opacity-50">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="black" />
													<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black" />
													<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="black" />
													<path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Message-->
										<div class="pb-15 fw-bold">
											<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
											<div class="text-muted fs-7">Please try again with a different query</div>
										</div>
										<!--end::Message-->
									</div>
									<!--end::Empty-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Preferences-->
								<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
									<!--begin::Heading-->
									<h3 class="fw-bold text-dark mb-7">Advanced Search</h3>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="mb-5">
										<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-5">
										<!--begin::Radio group-->
										<div class="nav-group nav-group-fluid">
											<!--begin::Option-->
											<label>
												<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
												<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label>
												<input type="radio" class="btn-check" name="type" value="users" />
												<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label>
												<input type="radio" class="btn-check" name="type" value="orders" />
												<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label>
												<input type="radio" class="btn-check" name="type" value="projects" />
												<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
											</label>
											<!--end::Option-->
										</div>
										<!--end::Radio group-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-5">
										<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-5">
										<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-5">
										<!--begin::Radio group-->
										<div class="nav-group nav-group-fluid">
											<!--begin::Option-->
											<label>
												<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
												<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label>
												<input type="radio" class="btn-check" name="attachment" value="any" />
												<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
											</label>
											<!--end::Option-->
										</div>
										<!--end::Radio group-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-5">
										<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
											<option value="next">Within the next</option>
											<option value="last">Within the last</option>
											<option value="between">Between</option>
											<option value="on">On</option>
										</select>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-8">
										<!--begin::Col-->
										<div class="col-6">
											<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-6">
											<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
												<option value="days">Days</option>
												<option value="weeks">Weeks</option>
												<option value="months">Months</option>
												<option value="years">Years</option>
											</select>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex justify-content-end">
										<button type="reset" class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
										<a href="../../demo9/dist/pages/search/horizontal.html" class="btn btn-sm fw-bolder btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Preferences-->
								<!--begin::Preferences-->
								<form data-kt-search-element="preferences" class="pt-1 d-none">
									<!--begin::Heading-->
									<h3 class="fw-bold text-dark mb-7">Search Preferences</h3>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="pb-4 border-bottom">
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
											<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Projects</span>
											<input class="form-check-input" type="checkbox" value="1" checked="checked" />
										</label>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="py-4 border-bottom">
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
											<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Targets</span>
											<input class="form-check-input" type="checkbox" value="1" checked="checked" />
										</label>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="py-4 border-bottom">
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
											<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Affiliate Programs</span>
											<input class="form-check-input" type="checkbox" value="1" />
										</label>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="py-4 border-bottom">
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
											<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Referrals</span>
											<input class="form-check-input" type="checkbox" value="1" checked="checked" />
										</label>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="py-4 border-bottom">
										<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
											<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Users</span>
											<input class="form-check-input" type="checkbox" value="1" />
										</label>
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex justify-content-end pt-7">
										<button type="reset" class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
										<button type="submit" class="btn btn-sm fw-bolder btn-primary">Save Changes</button>
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Preferences-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Search-->
					</div>
					<!--end::Search-->
					<!--begin::Action-->
					<div class="d-flex align-items-center py-3 py-lg-0">
						<div class="me-3">
							<a href="#" class="btn btn-icon btn-custom btn-active-color-primary position-relative" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
								<!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
								<span class="svg-icon svg-icon-1 svg-icon-white">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="black" />
										<path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-100 animation-blink"></span>
							</a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
								<!--begin::Heading-->
								<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/pattern-1.jpg')">
									<!--begin::Title-->
									<h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
										<span class="fs-8 opacity-75 ps-3">24 reports</span>
									</h3>
									<!--end::Title-->
									<!--begin::Tabs-->
									<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
										<li class="nav-item">
											<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
										</li>
									</ul>
									<!--end::Tabs-->
								</div>
								<!--end::Heading-->
								<!--begin::Tab content-->
								<div class="tab-content">
									<!--begin::Tab panel-->
									<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
										<!--begin::Items-->
										<div class="scroll-y mh-325px my-5 px-8">
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-primary">
															<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="black" />
																	<path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Alice</a>
														<div class="text-gray-400 fs-7">Phase 1 development</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">1 hr</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-danger">
															<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-danger">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
																	<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
																	<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">HR Confidential</a>
														<div class="text-gray-400 fs-7">Confidential staff documents</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">2 hrs</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-warning">
															<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-warning">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
																	<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Company HR</a>
														<div class="text-gray-400 fs-7">Corporeate staff profiles</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">5 hrs</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-success">
															<!--begin::Svg Icon | path: icons/duotune/files/fil023.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-success">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z" fill="black" />
																	<path d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z" fill="black" />
																	<path opacity="0.3" d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z" fill="black" />
																	<path d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Redux</a>
														<div class="text-gray-400 fs-7">New frontend admin theme</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">2 days</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-primary">
															<!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z" fill="black" />
																	<path d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Breafing</a>
														<div class="text-gray-400 fs-7">Product launch status update</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">21 Jan</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-info">
															<!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-info">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="black" />
																	<path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Banner Assets</a>
														<div class="text-gray-400 fs-7">Collection of banner images</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">21 Jan</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-warning">
															<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-warning">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
																	<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="black" />
																	<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Icon Assets</a>
														<div class="text-gray-400 fs-7">Collection of SVG icons</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">20 March</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Items-->
										<!--begin::View more-->
										<div class="py-3 text-center border-top">
											<a href="../../demo9/dist/pages/profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-5">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</a>
										</div>
										<!--end::View more-->
									</div>
									<!--end::Tab panel-->
									<!--begin::Tab panel-->
									<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
										<!--begin::Wrapper-->
										<div class="d-flex flex-column px-9">
											<!--begin::Section-->
											<div class="pt-10 pb-0">
												<!--begin::Title-->
												<h3 class="text-dark text-center fw-bolder">Get Pro Access</h3>
												<!--end::Title-->
												<!--begin::Text-->
												<div class="text-center text-gray-600 fw-bold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
												<!--end::Text-->
												<!--begin::Action-->
												<div class="text-center mt-5 mb-9">
													<a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
												</div>
												<!--end::Action-->
											</div>
											<!--end::Section-->
											<!--begin::Illustration-->
											<div class="text-center px-4">
												<img class="mw-100 mh-200px" alt="image" src="{{asset('assets/media/illustrations/sigma-1/1.png')}}" />
											</div>
											<!--end::Illustration-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Tab panel-->
									<!--begin::Tab panel-->
									<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
										<!--begin::Items-->
										<div class="scroll-y mh-325px my-5 px-8">
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-success me-4">200 OK</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-bold">New order</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Just now</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-bold">New customer</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">2 hrs</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-success me-4">200 OK</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-bold">Payment process</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">5 hrs</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-bold">Search query</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">2 days</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-success me-4">200 OK</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-bold">API connection</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">1 week</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-success me-4">200 OK</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-bold">Database restore</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Mar 5</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-bold">System update</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">May 15</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-bold">Server OS update</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Apr 3</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-bold">API rollback</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Jun 30</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-bold">Refund process</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Jul 10</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-bold">Withdrawal process</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Sep 10</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-bold">Mail tasks</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Dec 10</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Items-->
										<!--begin::View more-->
										<div class="py-3 text-center border-top">
											<a href="../../demo9/dist/pages/profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-5">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</a>
										</div>
										<!--end::View more-->
									</div>
									<!--end::Tab panel-->
								</div>
								<!--end::Tab content-->
							</div>
							<!--end::Menu-->
						</div>
						<div class="me-3">
							<a href="#" class="btn btn-icon btn-custom btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
								<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
								<span class="svg-icon svg-icon-1 svg-icon-white">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
										<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<div class="menu-content d-flex align-items-center px-3">
										<!--begin::Avatar-->
										<div class="symbol symbol-50px me-5">
											<img alt="Logo" src="{{asset('assets/media/avatars/150-26.jpg')}}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Username-->
										<div class="d-flex flex-column">
											<div class="fw-bolder d-flex align-items-center fs-5">Max Smith
												<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
											</div>
											<a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
										</div>
										<!--end::Username-->
									</div>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator my-2"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="../../demo9/dist/account/overview.html" class="menu-link px-5">My Profile</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="../../demo9/dist/pages/projects/list.html" class="menu-link px-5">
										<span class="menu-text">My Projects</span>
										<span class="menu-badge">
											<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
										</span>
									</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
									<a href="#" class="menu-link px-5">
										<span class="menu-title">My Subscription</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo9/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo9/dist/account/billing.html" class="menu-link px-5">Billing</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo9/dist/account/statements.html" class="menu-link px-5">Payments</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo9/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content px-3">
												<label class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
													<span class="form-check-label text-muted fs-7">Notifications</span>
												</label>
											</div>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="../../demo9/dist/account/statements.html" class="menu-link px-5">My Statements</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator my-2"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
									<a href="#" class="menu-link px-5">
										<span class="menu-title position-relative">Language
											<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
												<img class="w-15px h-15px rounded-1 ms-2" src="{{asset('assets/media/flags/united-states.svg')}}" alt="" /></span></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo9/dist/account/settings.html" class="menu-link d-flex px-5 active">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{asset('assets/media/flags/united-states.svg')}}" alt="" />
												</span>English</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo9/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{asset('assets/media/flags/spain.svg')}}" alt="" />
												</span>Spanish</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo9/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{asset('assets/media/flags/germany.svg')}}" alt="" />
												</span>German</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo9/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{asset('assets/media/flags/japan.svg')}}" alt="" />
												</span>Japanese</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo9/dist/account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{asset('assets/media/flags/france.svg')}}" alt="" />
												</span>French</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5 my-1">
									<a href="../../demo9/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="../../demo9/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator my-2"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<div class="menu-content px-5">
										<label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
											<input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo9/dist/index.html" />
											<span class="pulse-ring ms-n1"></span>
											<span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
										</label>
									</div>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</div>
						<a href="#" class="btn btn-blue"bs-target="#kt_modal_create_app" data-bs-toggle="modal">New Goal</a>
					</div>
					<!--end::Action-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Container-->
			<div class="header-offset"></div>
		</div>
		<!--end::Header-->
		<!--begin::Content-->
		<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
			<!--begin::Container-->
			<div class="container-xxl" id="kt_content_container">
				<!--begin::Row-->
				<div class="row g-5 g-xl-8">
					<!--begin::Col-->
					<div class="col-xl-12 ps-xl-12">
						<!--begin::Tables Widget 5-->
						<div class="card mb-xl-8">
							<!--begin::Body-->
							<div class="card-body py-3">
								<div class="tab-content">
									<!--begin::Tap pane-->
									<div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="-dashed table-row-gray-200 align-middle gs-0 gy-4">
												<!--begin::Table head-->
												<tr>
													<td>
														<span class="text-dark fw-bolder text-hover-primary mb-1 fs-6">ID</span>
													</td>
													<td>
														<span class="text-dark fw-bolder text-hover-primary mb-1 fs-6">คนยื่นเบิก</span>
													</td>
													<td>
														<span class="text-dark fw-bolder text-hover-primary mb-1 fs-6">ชื่อเบิกจ่าย</span>
													</td>
													<td>
														<span class="text-dark fw-bolder text-hover-primary mb-1 fs-6">จำนวน</span>
													</td>
													<td>
														<span class="text-dark fw-bolder text-hover-primary mb-1 fs-6">โอนแล้ว</span>
													</td>
													<td>
														<span class="text-dark fw-bolder text-hover-primary mb-1 fs-6">คงเหลือ</span>
													</td>
													<td>
														<span class="text-dark fw-bolder text-hover-primary mb-1 fs-6">ผู้รับเงิน</span>
													</td>
													<td>
														<span class="text-dark fw-bolder text-hover-primary mb-1 fs-6">วันที่ขอเบิก</span>
													</td>
													<td>
														<span class="text-dark fw-bolder text-hover-primary mb-1 fs-6">วันที่สะดวกโอน</span>
													</td>
													<td>
														<span class="text-dark fw-bolder text-hover-primary mb-1 fs-6">สถานะโอน</span>
													</td>
													<td>
														<span class="text-dark fw-bolder text-hover-primary mb-1 fs-6">หมายเหตุ</span>
													</td>
													<td>
														<span class="text-dark fw-bolder text-hover-primary mb-1 fs-6">ดำเนินการ</span>
													</td>
												</tr>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
														<td>
															<span class="text-dark text-hover-primary mb-1 fs-6">id</span>
														</td>
														<td>
															<span class="text-dark text-hover-primary mb-1 fs-6">คนยื่นเบิก</span>
														</td>
														<td>
															<span class="text-dark text-hover-primary mb-1 fs-6">ชื่อเบิกจ่าย</span>
														</td>
														<td>
															<span class="text-dark text-hover-primary mb-1 fs-6">500,000</span>
														</td>
														<td>
															<span class="text-dark text-hover-primary mb-1 fs-6">100,000</span>
														</td>
														<td>
															<span class="text-dark text-hover-primary mb-1 fs-6">EK</span>
														</td>
														<td>
															<span class="text-dark text-hover-primary mb-1 fs-6">21/11/21</span>
														</td>
														<td>
															<span class="text-dark text-hover-primary mb-1 fs-6">22/11/21</span>
														</td>
														<td>
															<span class="text-dark text-hover-primary mb-1 fs-6">หมายเหตุ</span>
														</td>
														<td>
															<span class="badge badge-light-danger">ยังไม่โอน</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="{{asset('assets/media/svg/brand-logos/vimeo.svg')}}" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New Users</a>
															<span class="text-muted fw-bold d-block">Awesome Users</span>
														</td>
														<td class="text-end text-muted fw-bold">Laravel,Metronic</td>
														<td class="text-end">
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="{{asset('assets/media/svg/brand-logos/bebo.svg')}}" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
															<span class="text-muted fw-bold d-block">Movie Creator</span>
														</td>
														<td class="text-end text-muted fw-bold">AngularJS, C#</td>
														<td class="text-end">
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="{{asset('assets/media/svg/brand-logos/kickstarter.svg')}}" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller Theme</a>
															<span class="text-muted fw-bold d-block">Best Customers</span>
														</td>
														<td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
														<td class="text-end">
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
										</div>
										<!--end::Table-->
									</div>
									<!--end::Tap pane-->
									<!--begin::Tap pane-->
									<div class="tab-pane fade" id="kt_table_widget_5_tab_2">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="-dashed table-row-gray-200 align-middle gs-0 gy-4">
												<!--begin::Table head-->
												<thead>
													<tr class="border-0">
														<th class="p-0 w-50px"></th>
														<th class="p-0 min-w-150px"></th>
														<th class="p-0 min-w-140px"></th>
														<th class="p-0 min-w-110px"></th>
														<th class="p-0 min-w-50px"></th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="{{asset('assets/media/svg/brand-logos/plurk.svg')}}" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
															<span class="text-muted fw-bold d-block">Movie Creator</span>
														</td>
														<td class="text-end text-muted fw-bold">React, HTML</td>
														<td class="text-end">
															<span class="badge badge-light-success">Approved</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="{{asset('assets/media/svg/brand-logos/telegram.svg')}}" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
															<span class="text-muted fw-bold d-block">Most Successful</span>
														</td>
														<td class="text-end text-muted fw-bold">Python, MySQL</td>
														<td class="text-end">
															<span class="badge badge-light-warning">In Progress</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="{{asset('assets/media/svg/brand-logos/bebo.svg')}}" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
															<span class="text-muted fw-bold d-block">Movie Creator</span>
														</td>
														<td class="text-end text-muted fw-bold">AngularJS, C#</td>
														<td class="text-end">
															<span class="badge badge-light-danger">Rejected</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
										</div>
										<!--end::Table-->
									</div>
									<!--end::Tap pane-->
									<!--begin::Tap pane-->
									<div class="tab-pane fade" id="kt_table_widget_5_tab_3">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table class="-dashed table-row-gray-200 align-middle gs-0 gy-4">
												<!--begin::Table head-->
												<thead>
													<tr class="border-0">
														<th class="p-0 w-50px"></th>
														<th class="p-0 min-w-150px"></th>
														<th class="p-0 min-w-140px"></th>
														<th class="p-0 min-w-110px"></th>
														<th class="p-0 min-w-50px"></th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="{{asset('assets/media/svg/brand-logos/kickstarter.svg')}}" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller Theme</a>
															<span class="text-muted fw-bold d-block">Best Customers</span>
														</td>
														<td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
														<td class="text-end">
															<span class="badge badge-light-warning">In Progress</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="{{asset('assets/media/svg/brand-logos/bebo.svg')}}" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
															<span class="text-muted fw-bold d-block">Movie Creator</span>
														</td>
														<td class="text-end text-muted fw-bold">AngularJS, C#</td>
														<td class="text-end">
															<span class="badge badge-light-danger">Rejected</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="{{asset('assets/media/svg/brand-logos/vimeo.svg')}}" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New Users</a>
															<span class="text-muted fw-bold d-block">Awesome Users</span>
														</td>
														<td class="text-end text-muted fw-bold">Laravel,Metronic</td>
														<td class="text-end">
															<span class="badge badge-light-primary">Success</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="symbol symbol-45px me-2">
																<span class="symbol-label">
																	<img src="{{asset('assets/media/svg/brand-logos/telegram.svg')}}" class="h-50 align-self-center" alt="" />
																</span>
															</div>
														</td>
														<td>
															<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
															<span class="text-muted fw-bold d-block">Most Successful</span>
														</td>
														<td class="text-end text-muted fw-bold">Python, MySQL</td>
														<td class="text-end">
															<span class="badge badge-light-warning">In Progress</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</td>
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
										</div>
										<!--end::Table-->
									</div>
									<!--end::Tap pane-->
								</div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Tables Widget 5-->
						<!--begin::Row-->
						<div class="row g-5 g-xl-8">
							<!--begin::Col-->
							<div class="col-xl-6">
								<!--begin::Mixed Widget 8-->
								<div class="card card-xl-stretch mb-xl-8">
									<!--begin::Body-->
									<div class="card-body">
										<!--begin::Heading-->
										<div class="d-flex flex-stack">
											<!--begin:Info-->
											<div class="d-flex align-items-center">
												<!--begin:Image-->
												<div class="symbol symbol-60px me-5">
													<span class="symbol-label bg-danger-light">
														<img src="{{asset('assets/media/svg/brand-logos/plurk.svg')}}" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end:Image-->
												<!--begin:Title-->
												<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
													<a href="#" class="text-dark fw-bolder text-hover-primary fs-5">Monthly Subscription</a>
													<span class="text-muted fw-bold">Due: 27 Apr 2020</span>
												</div>
												<!--end:Title-->
											</div>
											<!--begin:Info-->
											<!--begin:Menu-->
											<div class="ms-1">
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Ticket</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Customer</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
														<!--begin::Menu item-->
														<a href="#" class="menu-link px-3">
															<span class="menu-title">New Group</span>
															<span class="menu-arrow"></span>
														</a>
														<!--end::Menu item-->
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Admin Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Staff Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Member Group</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Contact</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 2-->
											</div>
											<!--end::Menu-->
										</div>
										<!--end::Heading-->
										<!--begin:Stats-->
										<div class="d-flex flex-column w-100 mt-12">
											<span class="text-dark me-2 fw-bolder pb-3">Progress</span>
											<div class="progress h-5px w-100">
												<div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<!--end:Stats-->
										<!--begin:Team-->
										<div class="d-flex flex-column mt-10">
											<div class="text-dark me-2 fw-bolder pb-4">Team</div>
											<div class="d-flex">
												<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
													<img src="{{asset('assets/media/avatars/150-1.jpg')}}" alt="" />
												</a>
												<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
													<img src="{{asset('assets/media/avatars/150-4.jpg')}}" alt="" />
												</a>
												<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
													<img src="{{asset('assets/media/avatars/150-8.jpg')}}" alt="" />
												</a>
												<a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alice Micto">
													<img src="{{asset('assets/media/avatars/150-9.jpg')}}" alt="" />
												</a>
											</div>
										</div>
										<!--end:Team-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Mixed Widget 8-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xl-6">
								<!--begin::Mixed Widget 8-->
								<div class="card card-xl-stretch mb-xl-8">
									<!--begin::Body-->
									<div class="card-body">
										<!--begin::Heading-->
										<div class="d-flex flex-stack">
											<!--begin:Info-->
											<div class="d-flex align-items-center">
												<!--begin:Image-->
												<div class="symbol symbol-60px me-5">
													<span class="symbol-label bg-primary-light">
														<img src="{{asset('assets/media/svg/brand-logos/vimeo.svg')}}" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end:Image-->
												<!--begin:Title-->
												<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
													<a href="#" class="text-dark fw-bolder text-hover-primary fs-5">Monthly Subscription</a>
													<span class="text-muted fw-bold">Due: 27 Apr 2020</span>
												</div>
												<!--end:Title-->
											</div>
											<!--begin:Info-->
											<!--begin:Menu-->
											<div class="ms-1">
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Ticket</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Customer</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
														<!--begin::Menu item-->
														<a href="#" class="menu-link px-3">
															<span class="menu-title">New Group</span>
															<span class="menu-arrow"></span>
														</a>
														<!--end::Menu item-->
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Admin Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Staff Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Member Group</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Contact</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 2-->
											</div>
											<!--end::Menu-->
										</div>
										<!--end::Heading-->
										<!--begin:Stats-->
										<div class="d-flex flex-column w-100 mt-12">
											<span class="text-dark me-2 fw-bolder pb-3">Progress</span>
											<div class="progress h-5px w-100">
												<div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										<!--end:Stats-->
										<!--begin:Team-->
										<div class="d-flex flex-column mt-10">
											<div class="text-dark me-2 fw-bolder pb-4">Team</div>
											<div class="d-flex">
												<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Ana Stone">
													<img src="{{asset('assets/media/avatars/150-1.jpg')}}" alt="" />
												</a>
												<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Mark Larson">
													<img src="{{asset('assets/media/avatars/150-4.jpg')}}" alt="" />
												</a>
												<a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" title="Sam Harris">
													<img src="{{asset('assets/media/avatars/150-8.jpg')}}" alt="" />
												</a>
												<a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" title="Alice Micto">
													<img src="{{asset('assets/media/avatars/150-9.jpg')}}" alt="" />
												</a>
											</div>
										</div>
										<!--end:Team-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Mixed Widget 8-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Container-->
		</div>
		<!--end::Content-->
		<!--begin::Footer-->
		<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
			<!--begin::Container-->
			<div class="container-xxl d-flex flex-column flex-md-row flex-stack">
				<!--begin::Copyright-->
				<div class="text-dark order-2 order-md-1">
					<span class="text-gray-400 fw-bold me-1">Created by</span>
					<a href="https://keenthemes.com" target="_blank" class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
				</div>
				<!--end::Copyright-->
				<!--begin::Menu-->
				<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
					<li class="menu-item">
						<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
					</li>
					<li class="menu-item">
						<a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
					</li>
					<li class="menu-item">
						<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
					</li>
				</ul>
				<!--end::Menu-->
			</div>
			<!--end::Container-->
		</div>
		<!--end::Footer-->
	</div>
	<!--end::Wrapper-->
</div>
<!--end::Page-->