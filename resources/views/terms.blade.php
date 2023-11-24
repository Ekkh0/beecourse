@extends('layout.contentlayout')
@section('titletitle')
    Terms&Conditions
@endsection

@section('contentcontent')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="text-center mb-4">Terms and Conditions</h2>

                <p>Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using the
                    BEECOURSE website (the "Service") operated by BEECOURSE.</p>

                <h4>1. Accounts</h4>
                <p>When you create an account with us, you must provide us with accurate, complete, and up-to-date
                    information at all times. Failure to do so constitutes a breach of the Terms, which may result in
                    immediate termination of your account on our Service.</p>

                <h4>2. Course Content</h4>
                <p>The content of the courses on BEECOURSE is for your general information and use only. It is subject to
                    change without notice.</p>

                <h4>3. Use License</h4>
                <p>Permission is granted to temporarily download one copy of the materials on BEECOURSE's website for
                    personal, non-commercial transitory viewing only.</p>

                <h4>4. Disclaimer</h4>
                <p>The materials on BEECOURSE's website are provided on an 'as is' basis. BEECOURSE makes no warranties,
                    expressed or implied, and hereby disclaims and negates all other warranties including, without
                    limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or
                    non-infringement of intellectual property or other violation of rights.</p>

                <h4>5. Governing Law</h4>
                <p>These Terms shall be governed and construed in accordance with the laws of your country, without regard
                    to its conflict of law provisions.</p>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="agreeCheckbox">
                    <label class="form-check-label" for="agreeCheckbox">I agree to the Terms and Conditions</label>
                </div>

                <button type="button" class="btn btn-primary mt-3" onclick="submitForm()">Submit</button>

                <p>By accessing or using the Service, you agree to be bound by these Terms. If you disagree with any part of
                    the terms, then you may not access the Service.</p>

                <p>Thank you for choosing BEECOURSE!</p>
            </div>
        </div>
    </div>
@endsection
