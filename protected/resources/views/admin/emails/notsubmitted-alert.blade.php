<link rel="stylesheet" href="{{ asset('assets/css/AdminLTE.min.css') }}" />
<img src="{{ $message->embed(asset('assets/img/logo-credit-black.png')) }}" class="pull-right" alt="Mandiri Tunas Finance | Credit Management Division" /><br />
<p>
  <h3>Scoring Reminder</h3>
</p>
<hr /><br />
<p>
    Dear, Mr/Mrs. <strong>{{ $email->FullName }}</strong>.<br />
    We're here to remind you that you not submitted your scoring form until now. We know that you've been too busy lately but please do submit your score before the system closed. <br />
    Here's a quick reminder of what you need to do :<br />
    <ul>
        <li>Login to the system at <a href="{{ url('/') }}">MTF PA System</a> using your credentials.</li>
        <li>Click submit score menu in the sidebar.</li>
        <li>Click "Create Form" button.</li>
        <li>And Fill your score and achievement then click the submit button.</li>
    </ul><br />

    We hope you submit your scoring form as soon as possible before the system closed.<br />
    Thank you for your attention.

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
