
        <div class="p-3 py-4 pt-5">
            <h5>اطلاعات پایگاه داده</h5>
            <div class="pb-5 mb-5 border-bottom">
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="dbhost" class="small">میزبان پایگاه داده:</label>
                        <input type="text" required class="form-control mt-1" name="db[host]" id="dbhost">
                        <div class="invalid-feedback">
                            میزبان پایگاه داده را وارد نمایید
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="dbname" class="small">نام پایگاه داده:</label>
                        <input type="text" required class="form-control mt-1" name="db[name]" id="dbname">
                        <div class="invalid-feedback">
                            نام پایگاه داده را وارد نمایید
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="dbuser" class="small">نام کاربری پایگاه داده:</label>
                        <input type="text" required class="form-control mt-1" name="db[user]" id="dbuser">
                        <div class="invalid-feedback">
                            نام کاربری پایگاه داده را وارد نمایید
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="dbpass" class="small">رمز عبور پایگاه داده:</label>
                        <input type="text" class="form-control mt-1" name="db[pass]" id="dbpass">
                    </div>
                </div>
            </div>

            <h5>اطلاعات سایت</h5>
            <div class="pb-5 mb-5 border-bottom">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="sitename" class="small">نام سایت:</label>
                        <input type="text" required class="form-control mt-1" name="site[name]" id="sitename">
                        <div class="invalid-feedback">
                            نام سایت را وارد نمایید
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="logo" class="small">لوگو سایت:</label>
                        <input type="file" class="form-control mt-1" name="logo" id="logo">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="favicon" class="small">facivon سایت:</label>
                        <input type="file" class="form-control mt-1" name="favicon" id="favicon">
                    </div>
                </div>
            </div>

            <h5>اطلاعات سرور ایمیل</h5>
            <div class="pb-5 mb-4">
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="mailhost" class="small">میزبان سرور ایمیل:</label>
                        <input type="text" class="form-control mt-1" name="mail[host]" id="mailhost">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="mailport" class="small">پورت سرور ایمیل:</label>
                        <input type="text" class="form-control mt-1" name="mail[port]" id="mailport">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <label for="mailemail" class="small">ایمیل سرور ایمیل:</label>
                        <input type="email" class="form-control mt-1" dir="ltr" name="mail[email]" id="mailemail">
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="mailuser" class="small">نام کاربری سرور ایمیل:</label>
                        <input type="text" class="form-control mt-1" name="mail[user]" id="mailuser">
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="mailpass" class="small">رمز عبور سرور ایمیل:</label>
                        <input type="text" class="form-control mt-1" name="mail[pass]" id="mailpass">
                    </div>
                </div>
            </div>
        </div>


