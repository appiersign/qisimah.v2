<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Mar 28 2018 21:05:17 GMT+0000 (UTC)  -->
<html data-wf-page="5aadc40baf9783213523aaef" data-wf-site="5aadc40aaf9783146823aac3">

@include('components.head')

<body class="body-2">
<div class="form-modal">
    <div class="div-block-24"><a href="#" class="form-modal-close w-inline-block" data-ix="form-modal-close"><img
                    src="images/close-icon.svg" width="17.5"></a>
        <div class="form-block-3 w-form">
            <form id="qisimah-verification-form" name="email-form" data-name="Email Form" action="http://qisimahmail">
                <label for="name" class="verify-form-label">Name:</label><input type="text" class="form-field w-input"
                                                                                maxlength="256" name="name"
                                                                                data-name="Name"
                                                                                placeholder="Enter your name" id="name"><label
                        for="user-type" class="verify-form-label">User type:</label><select id="user-type"
                                                                                            name="user-type"
                                                                                            data-name="User Type"
                                                                                            class="form-field w-select">
                    <option value="">Select one...</option>
                    <option value="Recording Artist">Recording Artist</option>
                    <option value="Record Label / Company">Record Label / Company</option>
                    <option value="Advertiser">Advertiser</option>
                    <option value="Royalties Collection">Royalties Collection</option>
                </select><label for="phone" class="verify-form-label">Phone Number</label><input type="text"
                                                                                                 class="form-field w-input"
                                                                                                 maxlength="256"
                                                                                                 name="phone"
                                                                                                 data-name="Phone"
                                                                                                 placeholder="Kindly provide a number"
                                                                                                 id="phone" required=""><label
                        for="email" class="verify-form-label">Email Address:</label><input type="email"
                                                                                           class="form-field w-input"
                                                                                           maxlength="256" name="email"
                                                                                           data-name="Email"
                                                                                           placeholder="Enter your email"
                                                                                           id="email" required=""><input
                        type="submit" value="Submit" data-wait="Please wait..." class="submit-button-2 w-button"></form>
            <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
            </div>
        </div>
    </div>
</div>

@include('components.guest.nav')

@yield('content')

@include('components.footer')

@include('components.scripts')

</body>
</html>