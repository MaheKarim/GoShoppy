@extends('layouts.backend.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-check icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    FAQS Management
                </div>
            </div>
            <div class="page-title-actions">
                <a href="{{ route('app.faq-system.index') }}" class="btn-shadow mr-3 btn btn-danger">
                    <i class="fa fa-arrow-circle-left"></i>
                    Back To List
                </a>

            </div>
        </div>
    </div>

    <div class="tabs-animation">

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <form action="{{  route('app.faq-system.update', $faq->id) }}"
                          method="post">
                        @csrf

                            @method('PUT')

                        <div class="card-body">
                            <h5 class="card-title">FAQ Title</h5>
                            <div class="form-group">
                                <label for="faq_ques">FAQ Ques</label>
                                <input id="faq_ques" type="text" class="form-control @error('faq_ques') is-invalid @enderror"
                                       name="faq_ques" value="{{ $faq->faq_ques }}" >
                                <input type="hidden" name="faq_ques_id" value="{{ $faq->id }}">
                                @error('faq_ques')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="faq_ans">FAQ Description</label>
                                <input id="faq_ans" type="text" class="form-control @error('faq_ans') is-invalid @enderror"
                                       name="faq_ans" value="{{ $faq->faq_ans }}" >

                                @error('faq_ans')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Div Name End -->


                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-arrow-circle-up"></i>
                                    Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('js')
    <script type="text/javascript">
        // Listen for click on toggle checkbox
        $('#select-all').click(function (event) {
            if (this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function () {
                    this.checked = true;
                });
            } else {
                $(':checkbox').each(function () {
                    this.checked = false;
                });
            }
        });
    </script>
@endpush
