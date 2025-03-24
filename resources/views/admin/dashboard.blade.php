@extends('admin.index')
@section('content')
    <div class="row g-4">
        <div class="col-12 col-xxl-6">
            <div class="row align-items-center g-4">
                <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><span class="fa-stack"
                            style="min-height: 46px;min-width: 46px;"><span
                                class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-success-light"
                                data-fa-transform="down-4 rotate--10 left-4"></span><span
                                class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-success"
                                data-fa-transform="up-4 right-3 grow-2"></span><span
                                class="fa-stack-1x fa-solid fa-star text-success "
                                data-fa-transform="shrink-2 up-8 right-6"></span></span>
                        <div class="ms-3">
                            <h4 class="mb-0">57 new orders</h4>
                            <p class="text-body-secondary fs-9 mb-0">Awating processing</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><span class="fa-stack"
                            style="min-height: 46px;min-width: 46px;"><span
                                class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-warning-light"
                                data-fa-transform="down-4 rotate--10 left-4"></span><span
                                class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-warning"
                                data-fa-transform="up-4 right-3 grow-2"></span><span
                                class="fa-stack-1x fa-solid fa-pause text-warning "
                                data-fa-transform="shrink-2 up-8 right-6"></span></span>
                        <div class="ms-3">
                            <h4 class="mb-0">5 orders</h4>
                            <p class="text-body-secondary fs-9 mb-0">On hold</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><span class="fa-stack"
                            style="min-height: 46px;min-width: 46px;"><span
                                class="fa-solid fa-square fa-stack-2x dark__text-opacity-50 text-danger-light"
                                data-fa-transform="down-4 rotate--10 left-4"></span><span
                                class="fa-solid fa-circle fa-stack-2x stack-circle text-stats-circle-danger"
                                data-fa-transform="up-4 right-3 grow-2"></span><span
                                class="fa-stack-1x fa-solid fa-xmark text-danger "
                                data-fa-transform="shrink-2 up-8 right-6"></span></span>
                        <div class="ms-3">
                            <h4 class="mb-0">15 products</h4>
                            <p class="text-body-secondary fs-9 mb-0">Out of stock</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-6 pb-9 border-top mt-4">
        <div class="row g-6">
            <div class="col-12 col-xl-6">
                <div class="me-xl-4">
                    <div>
                        <h3>Projection vs actual</h3>
                        <p class="mb-1 text-body-tertiary">Actual earnings vs projected earnings</p>
                    </div>
                    <div class="echart-projection-actual" style="height:300px; width:100%"></div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div>
                    <h3>Returning customer rate</h3>
                    <p class="mb-1 text-body-tertiary">Rate of customers returning to your shop over time</p>
                </div>
                <div class="echart-returning-customer" style="height:300px;"></div>
            </div>
        </div>
    </div>
@endsection
