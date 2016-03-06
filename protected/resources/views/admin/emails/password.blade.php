<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
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
  Hello, This email has been sent to you so you can reset your login account password<br />
  Please click the link below to complete the password reset process. This link will expire in 1 hour.
</p>

<p>
  Click here to reset your password:<br />
  {{ url('password/reset/'.$token) }}
</p>

<p>
  Received this message by mistake?<br />
  You may have received this email in error<br />
  because another user entered this email address by mistake.<br />
  If you received this message by mistake, please delete this email.<br />
</p>

<b>Note : Please do not reply this e-mail.</b>
<br /><br /><br />
<hr>
<p>
  <img src="{{ $message->embed(asset('assets/img/logo-credit-black.png')) }}" class="pull-right" alt="Mandiri Tunas Finance | Credit Management Division" /><br />
  For support requests, please contact us by going to our support page or contact the developer.<br />
  This email has been sent to you by Mandiri Tunas Finance | Credit Management Division.
</p>
