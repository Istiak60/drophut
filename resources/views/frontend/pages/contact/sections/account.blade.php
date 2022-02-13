<section class="account">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="account-contents"
                    style="background: url('asset/frontend/assets/img/about/about2.jpg'); background-size: cover;">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                            <div class="account-thumb">
                                <h2>Contact us</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consectetur similique
                                    deleniti pariatur enim cumque eum</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                            <div class="account-content">
                                <form action="{{ route('contact.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-acc-field">
                                                <label for="name">Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                                    placeholder="name" value="{{old('name')}}" name="name" id="name">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-acc-field">
                                                <label for="email">Email</label>
                                                <input class="form-control @error('email') is-invalid @enderror" type="email"
                                                    value="{{old('email')}}" placeholder="email" name="email" id="email">
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-acc-field">
                                                <label for="msg">Message</label>
                                                <textarea class="form-control @error('msg') is-invalid @enderror" name="msg"
                                                    id="msg" name="msg" value="{{old('msg')}}" rows="4"></textarea>
                                                @error('msg')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-acc-field boxes">
                                        <input type="checkbox" id="checkbox">
                                        <label for="checkbox">Remember me</label>
                                    </div>
                                    <div class="single-acc-field">
                                        <button type="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
