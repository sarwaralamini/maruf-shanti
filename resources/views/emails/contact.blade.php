@component('mail::message')

<h1 style="text-align:center;">Shanti Contact Email</h1>

<h3>Contact person:</h3>

<div class="contact-details">
<table border="1px solid #718096" style="width:100%!important;">
    <tr>
        <th style="text-align: left;">Name:</th>
        <td>{{ $data['name']}}</td>
    </tr>
    <tr>
        <th style="text-align: left;">Subject:</th>
        <td>{{ $data['subject']}}</td>
    </tr>
    <tr>
        <th style="text-align: left;">Phone:</th>
        <td>
            <a href="tel:{{ $data['phone']}}">{{ $data['phone']}}</a>
        </td>
    </tr>
</table>

<h3 style="margin-top:10px!important;">Message:</h3>
<p style="text-align:justify;">
    {{ $data['message']}}
</p>
</div>
Thanks,<br>
{{ $data['name']}}
@endcomponent
