<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;

class UserAccountContext implements Context
{


    /**
     * @Given I am an Advertiser
     */
    public function iAmAnAdvertiser()
    {
        throw new PendingException();
    }

    /**
     * @When I am on :arg1
     */
    public function iAmOn($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I click on :arg1
     */
    public function iClickOn($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see a :arg1 with fields such as :arg2, :arg3, :arg4, :arg5, :arg6, :arg7
     */
    public function iShouldSeeAWithFieldsSuchAs($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see a :arg1 with fields such as :arg2, :arg3,:arg4, :arg5, :arg6, :arg7, :arg8
     */
    public function iShouldSeeAWithFieldsSuchAs2($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see a :arg1 with fields such as :arg2, :arg3, :arg4,:arg5 to activate account.
     */
    public function iShouldSeeAWithFieldsSuchAsToActivateAccount($arg1, $arg2, $arg3, $arg4, $arg5)
    {
        throw new PendingException();
    }

    /**
     * @When I am on the :arg1 Tab
     */
    public function iAmOnTheTab($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see details such as :arg1 as image, :arg2 as title, :arg3 as artists, :arg4 as radio station, :arg5 as time played, :arg6 as plays today, "plays this week"as plays this week and :arg7 as duration played
     */
    public function iShouldSeeDetailsSuchAsAsImageAsTitleAsArtistsAsRadioStationAsTimePlayedAsPlaysTodayPlaysThisWeekAsPlaysThisWeekAndAsDurationPlayed($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see details such as :arg1 as image, :arg2 as title, :arg3 as artists, :arg4 as TV Station, :arg5 as time played, :arg6 as plays today, "plays this week"as plays this week and :arg7 as duration played
     */
    public function iShouldSeeDetailsSuchAsAsImageAsTitleAsArtistsAsTvStationAsTimePlayedAsPlaysTodayPlaysThisWeekAsPlaysThisWeekAndAsDurationPlayed($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7)
    {
        throw new PendingException();
    }

    /**
     * @Given I am logged in as :arg1
     */
    public function iAmLoggedInAs($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I am a new user
     */
    public function iAmANewUser()
    {
        throw new PendingException();
    }

    /**
     * @Then I should see a :arg1 with field :arg2 as email to verify email.
     */
    public function iShouldSeeAWithFieldAsEmailToVerifyEmail($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then :arg1 is sent to the email used.
     */
    public function isSentToTheEmailUsed($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I have already created an account
     */
    public function iHaveAlreadyCreatedAnAccount()
    {
        throw new PendingException();
    }

    /**
     * @Then I should see a :arg1 with fields such as :arg2 and :arg3 to login.
     */
    public function iShouldSeeAWithFieldsSuchAsAndToLogin($arg1, $arg2, $arg3)
    {
        throw new PendingException();
    }

    /**
     * @Then I should have :arg2 features added to the plan and be able to see :arg1 Plan has been created.
     */
    public function iShouldHaveFeaturesAddedToThePlanAndBeAbleToSeePlanHasBeenCreated($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I type :arg1 as name, :arg2 as role, :arg3 as compay,:arg4 as logo, :arg5 as contact, :arg6 as email, :arg7 as telephone, :arg8 as website, :arg9 as twitter, :arg10 as facebook, :arg11 as instagram,:arg12 as youtube.
     */
    public function iTypeAsNameAsRoleAsCompayAsLogoAsContactAsEmailAsTelephoneAsWebsiteAsTwitterAsFacebookAsInstagramAsYoutube($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10, $arg11, $arg12)
    {
        throw new PendingException();
    }

    /**
     * @When I click request
     */
    public function iClickRequest()
    {
        throw new PendingException();
    }

    /**
     * @When I click the :arg1 button
     */
    public function iClickTheButton($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see the file explorer window
     */
    public function iShouldSeeTheFileExplorerWindow()
    {
        throw new PendingException();
    }

    /**
     * @Then I should select a :arg1 by double clicking a song file
     */
    public function iShouldSelectAByDoubleClickingASongFile($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see :arg1 page
     */
    public function iShouldSeePage($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I have completed the :arg1
     */
    public function iHaveCompletedThe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see loader whilst upload is in progress
     */
    public function iShouldSeeLoaderWhilstUploadIsInProgress()
    {
        throw new PendingException();
    }

    /**
     * @When :arg1 of Uploaded :arg2 exist
     */
    public function ofUploadedExist($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I am given :arg1
     */
    public function iAmGiven($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should select :arg1 button
     */
    public function iShouldSelectButton($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I have submitted my email for verification
     */
    public function iHaveSubmittedMyEmailForVerification()
    {
        throw new PendingException();
    }

    /**
     * @Given a verification has been sent to my email
     */
    public function aVerificationHasBeenSentToMyEmail()
    {
        throw new PendingException();
    }

    /**
     * @When I am on :arg1 page
     */
    public function iAmOnPage($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should type in  :arg1 with field code from email.
     */
    public function iShouldTypeInWithFieldCodeFromEmail($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should be sent to :arg1 page with fields :arg2 as your name, :arg3 as password, :arg4 as confrim password,
     */
    public function iShouldBeSentToPageWithFieldsAsYourNameAsPasswordAsConfrimPassword($arg1, $arg2, $arg3, $arg4)
    {
        throw new PendingException();
    }

    /**
     * @Then select role you fall in :arg1 as artist, :arg2 as label rep, :arg3 as manager, :arg4 as composer, :arg5 as producer,:arg6 as writer
     */
    public function selectRoleYouFallInAsArtistAsLabelRepAsManagerAsComposerAsProducerAsWriter($arg1, $arg2, $arg3, $arg4, $arg5, $arg6)
    {
        throw new PendingException();
    }

    /**
     * @Then submit.
     */
    public function submit()
    {
        throw new PendingException();
    }

    /**
     * @When I type in wrong :arg1
     */
    public function iTypeInWrong($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then asked to confirm or resend code
     */
    public function askedToConfirmOrResendCode()
    {
        throw new PendingException();
    }

    /**
     * @Given Message This song sounds like :arg1 by :arg2
     */
    public function messageThisSongSoundsLikeBy($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When Uploaded :arg1 is the same one that exists
     */
    public function uploadedIsTheSameOneThatExists($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should click :arg1 button
     */
    public function iShouldClickButton($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I have submitted a song
     */
    public function iHaveSubmittedASong()
    {
        throw new PendingException();
    }

    /**
     * @When Uploaded :arg1 does not already exist
     */
    public function uploadedDoesNotAlreadyExist($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see the :arg1
     */
    public function iShouldSeeThe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should select or type :arg1 as title, :arg2 as version, :arg3 as Main Artist, :arg4 as Featured Artist(s), :arg5 as Genre, :arg6 as Produced by, :arg7 as Album, :arg8 as Cover Art, :arg9 as Label, :arg10 as Release Date
     */
    public function iShouldSelectOrTypeAsTitleAsVersionAsMainArtistAsFeaturedArtistSAsGenreAsProducedByAsAlbumAsCoverArtAsLabelAsReleaseDate($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10)
    {
        throw new PendingException();
    }

    /**
     * @When Uploaded :arg1 exists
     */
    public function uploadedExists($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should be taken back to the :arg1
     */
    public function iShouldBeTakenBackToThe($arg1)
    {
        throw new PendingException();
    }
}
