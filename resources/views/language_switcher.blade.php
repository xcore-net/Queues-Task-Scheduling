<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
<form id="langform" action="{{ route('user.lang') }}" method="get" class="d-flex align-items-center">

<select class="form-select" name="lang" id="lang" onchange="this.form.submit()">

    <option disabled>Language</option>

    <option value="en" @if (Session::get('locale', 'en') == 'en') selected @endif> English</option>

    <option value="ar" @if (session('locale') == 'ar') selected @endif> Arabic</option>

</select>

</form>
</div>