<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('assets/css/AdminLTE.min.css') }}" />
<style>
p {
  font-family: 'Open Sans';
  font-size: 14px;
  font-style: normal;
  font-variant: normal;
  font-weight: 400;
  line-height: 20px;
}
</style>

<img src="{{ $message->embed(asset('assets/img/logo-credit-black.png')) }}" class="pull-right" alt="Mandiri Tunas Finance | Credit Management Division" /><br />
<p>
  <h3>Reminder - New Submitted Score</h3>
</p>
<hr /><br />
<p>
    Dear, Mr/Mrs. <strong>{{ $parent->FullName }}</strong>.<br />
    We've got a news for you - <strong>{{ $self->FullName }}</strong> has approve his/her score in <strong>MTF - Employee Scoring System</strong>.<br />
    We need your approval to finalized this scoring form. Please follow this link and login to the system using your credentials.<br />

    <a href="{{ url('/') }}"><b>MTF - Employee Scoring System</a><br />

    Yours Sincerely,

    The MTF - Employee Scoring System Team.
</p>

<b>Note : This is an automated alert email. Please do not reply this e-mail.</b>
<br /><br /><br />
<hr>
<p>
  <img src="{{ $message->embed(asset('assets/img/logo-credit-black.png')) }}" class="pull-right" alt="Mandiri Tunas Finance | Credit Management Division" /><br />
  For support requests, please contact us by going to our support page or contact the developer.<br />
  This email has been sent to you by Mandiri Tunas Finance | Credit Management Division.
</p>
