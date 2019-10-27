<div class="tab-pane fade active show" id="nav-password" role="tabpanel"
                            aria-labelledby="nav-password-tab" aria-expanded="true">
                            <div class="acc-setting">
                                <h3>Account Setting</h3>
                                {{ html()->form('PATCH', route('frontend.auth.password.update'))->class('form-horizontal')->open() }}
                                <div class="cp-field">
                                    <h5>Old Password</h5>
                                    <div class="cpp-fiel">
                                        {{ html()->password('old_password')
                                                ->class('form-control')
                                                ->placeholder(__('validation.attributes.frontend.old_password'))
                                                ->autofocus()
                                                ->required() }}
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="cp-field">
                                    <h5>New Password</h5>
                                    <div class="cpp-fiel">
                                            {{ html()->password('password')
                                            ->class('form-control')
                                            ->placeholder(__('validation.attributes.frontend.password'))
                                            ->required() }}                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="cp-field">
                                    <h5>Repeat Password</h5>
                                    <div class="cpp-fiel">
                                            {{ html()->password('password_confirmation')
                                            ->class('form-control')
                                            ->placeholder(__('validation.attributes.frontend.password_confirmation'))
                                            ->required() }}                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                {{-- <div class="cp-field">
                                    <h5><a href="#" title="">Forgot Password?</a></h5>
                                </div> --}}
                                <div class="save-stngs pd2">
                                    <ul>
                                        {{-- <li><button type="submit">Save Setting</button></li> --}}
                                        {{ form_submit(__('labels.general.buttons.update') . ' ' . __('validation.attributes.frontend.password')) }}

                                    </ul>
                                </div>
                                <!--save-stngs end-->
                                </form>
                            </div>
                            <!--acc-setting end-->
                        </div>