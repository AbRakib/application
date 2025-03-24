@extends('admin.index')
@section('content')
    <div class="mb-9">
        <div class="row g-2 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Applicaitons</h2>
            </div>
        </div>
        <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <span>All </span>
                    <span  class="text-body-tertiary fw-semibold">(0)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><span>New </span>
                    <span class="text-body-tertiary fw-semibold">(0)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>Top reviews </span>
                    <span class="text-body-tertiary fw-semibold">(0)</span>
                </a>
            </li>
        </ul>
        <div id="products"
            data-list='{"valueNames":["customer","email","total-orders","total-spent","city","last-seen","last-order"],"page":10,"pagination":true}'>

            <div
                class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                    <table class="table table-sm fs-9 mb-0">
                        <thead>
                            <tr>
                                <th class="white-space-nowrap fs-9 align-middle ps-0">
                                    <div class="form-check mb-0 fs-8">
                                        <input class="form-check-input" id="checkbox-bulk-customers-select" type="checkbox"
                                            data-bulk-select='{"body":"customers-table-body"}' />
                                    </div>
                                </th>
                                <th class="sort align-middle pe-5" scope="col" data-sort="customer" style="width:10%;">
                                    Applicants
                                </th>
                                <th class="sort align-middle pe-5" scope="col" data-sort="customer" style="width:10%;">
                                    Referer
                                </th>
                                <th class="sort align-middle pe-5" scope="col" data-sort="email" style="width:20%;">
                                    Email Address
                                </th>
                                <th class="sort align-middle text-end" scope="col" data-sort="total-orders"
                                    style="width:20%">
                                    Phone
                                </th>
                                <th class="sort align-middle ps-7" scope="col" data-sort="city" style="width:20%;">
                                    Exprience
                                </th>
                                <th class="sort align-middle text-end" scope="col" data-sort="last-seen"
                                    style="width:25%;">Skills</th>
                                <th class="sort align-middle text-end pe-0" scope="col" data-sort="last-order"
                                    style="width:15%;min-width: 150px;">Most Recent Role</th>
                            </tr>
                        </thead>
                        <tbody class="list" id="application-table-body">
                            {{-- render data  --}}
                        </tbody>
                    </table>
                </div>

                <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                    <div class="col-auto d-flex">
                        <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p>
                        <a class="fw-semibold" href="#!" data-list-view="*">View all<span
                                class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a
                            class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span
                                class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                                class="fas fa-chevron-left"></span></button>
                        <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span
                                class="fas fa-chevron-right"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $.ajax({
            type: "get",
            url: "{{ route('admin.get.applications') }}",
            dataType: "json",
            success: function (response) {
                if (response.status == 200) {
                    $('#application-table-body').html(response.view);
                }
            }
        });
    </script>
@endsection
