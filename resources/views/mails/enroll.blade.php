<div>
    <h3>Hi, You received an Enrollment request mail from: {{ $first_name }} {{ $last_name }}</h3>
    <div>
        Please see the details below
    </div>
    <div style="padding: 5% 10%;  background:#fff;  box-shadow: 0px 3.73px 3.73px 0px #00000040;">
        <table style="max-width:728px;  border-collapse: collapse;width: 100%;">
            <tbody>
                <tr style="max-height:100px;">
                    <th colspan="50%" style="text-align:left;">
                       First Name
                    </th>
                    <td style="text-align:left;">{{$first_name}}</td>
                </tr>
                <tr style="max-height:100px;">
                    <th colspan="50%" style="text-align:left;">
                       Last Name
                    </th>
                    <td style="text-align:left;">{{$last_name}}</td>
                </tr>
                <tr style="max-height:100px;">
                    <th colspan="50%" style="text-align:left;">
                       Name of Congregation
                    </th>
                    <td style="text-align:left;">{{$congregation}}</td>
                </tr>
                <tr style="max-height:100px;">
                    <th colspan="50%" style="text-align:left;">
                       Phone Number
                    </th>
                    <td style="text-align:left;">{{$phone}}</td>
                </tr>
                <tr style="max-height:100px;">
                    <th colspan="50%" style="text-align:left;">
                       Email
                    </th>
                    <td style="text-align:left;">{{$email}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
