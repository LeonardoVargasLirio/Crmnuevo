@extends('Administrador.diseno.plantilla')
@section('content')

    <div class="d-flex flex-wrap flex-stack mb-6">
        <!--begin::Title-->
        <h3 class="fw-bold my-2">My Documents
            <span class="fs-6 text-gray-400 fw-semibold ms-1">100+ resources</span></h3>
        <!--end::Title-->
        <!--begin::Controls-->
        <div class="d-flex my-2">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative me-4">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <input type="text" id="kt_filter_search" class="form-control form-control-sm border-body bg-body w-150px ps-10" placeholder="Search" />
            </div>
            <!--end::Search-->
            <a href="../../demo8/dist/apps/file-manager/files.html" class="btn btn-primary btn-sm">File Manager</a>
        </div>
        <!--end::Controls-->
    </div>
    <!--end::Documents toolbar-->
    <!--begin::Row-->
    <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="../../demo8/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                            <img src="assets/media/svg/files/folder-document.svg" class="theme-light-show" alt="" />
                            <img src="assets/media/svg/files/folder-document-dark.svg" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">Finance</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-400">7 files</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="../../demo8/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                            <img src="assets/media/svg/files/folder-document.svg" class="theme-light-show" alt="" />
                            <img src="assets/media/svg/files/folder-document-dark.svg" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">Customers</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-400">3 files</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="../../demo8/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-75px mb-5">
                            <img src="assets/media/svg/files/folder-document.svg" class="theme-light-show" alt="" />
                            <img src="assets/media/svg/files/folder-document-dark.svg" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">CRM Project</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-400">25 files</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
    </div>
    <!--end:Row-->
    <!--begin::Row-->
    <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="../../demo8/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-60px mb-5">
                            <img src="assets/media/svg/files/pdf.svg" class="theme-light-show" alt="" />
                            <img src="assets/media/svg/files/pdf-dark.svg" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">Project Reqs..</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-400">3 days ago</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="../../demo8/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-60px mb-5">
                            <img src="assets/media/svg/files/doc.svg" class="theme-light-show" alt="" />
                            <img src="assets/media/svg/files/doc-dark.svg" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">CRM App Docs..</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-400">3 days ago</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="../../demo8/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-60px mb-5">
                            <img src="assets/media/svg/files/css.svg" class="theme-light-show" alt="" />
                            <img src="assets/media/svg/files/css-dark.svg" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">User CRUD Styles</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-400">4 days ago</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="../../demo8/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-60px mb-5">
                            <img src="assets/media/svg/files/ai.svg" class="theme-light-show" alt="" />
                            <img src="assets/media/svg/files/ai-dark.svg" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">Product Logo</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-400">5 days ago</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="../../demo8/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-60px mb-5">
                            <img src="assets/media/svg/files/sql.svg" class="theme-light-show" alt="" />
                            <img src="assets/media/svg/files/sql-dark.svg" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">Orders backup</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-400">1 week ago</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="../../demo8/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-60px mb-5">
                            <img src="assets/media/svg/files/xml.svg" class="theme-light-show" alt="" />
                            <img src="assets/media/svg/files/xml-dark.svg" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">UTAIR CRM API Co..</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-400">2 weeks ago</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="../../demo8/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-60px mb-5">
                            <img src="assets/media/svg/files/tif.svg" class="theme-light-show" alt="" />
                            <img src="assets/media/svg/files/tif-dark.svg" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">Tower Hill App..</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-400">3 weeks ago</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
    </div>
    <!--end:Row-->

@endsection
