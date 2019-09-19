<!DOCTYPE html>
<html>
        <head>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                <style>

                        table {

                            border-collapse: collapse;
                            width: 100%;
                        }

                        td, th {
                            border-bottom: 1px solid #dddddd;
                            text-align: left;
                            padding: 0px;
                        }



                    @font-face {
                        font-family: 'THSarabunNew';
                        font-style: normal;
                        font-weight: normal;
                        src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
                    }
                    @font-face {
                        font-family: 'THSarabunNew';
                        font-style: normal;
                        font-weight: bold;
                        src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
                    }
                    @font-face {
                        font-family: 'THSarabunNew';
                        font-style: italic;
                        font-weight: normal;
                        src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
                    }
                    @font-face {
                        font-family: 'THSarabunNew';
                        font-style: italic;
                        font-weight: bold;
                        src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
                    }

                    body {
                        padding-left: 60px;
                        font-family: 'THSarabunNew', sans-serif;
                        font-size: 22px;
                    }
                </style>
            </head>
  <body>
      <div align="center">
            <img width="150" src="<?php echo $_SERVER["DOCUMENT_ROOT"].'/bandgongtham5.jpg';?>"/>
      </div>

      <div align="center" style="margin-top:-20px;">
        <div>
            <h4><strong>
                    {{$item['1']}}

                </strong>
            </h4>
        </div>
        <div style="margin-top:-20px;">
            <h4><strong>
                  {{$item['2']}} เพื่อดำเนินการสมัครธรรมศึกษา

                </strong>
            </h4>
        </div>
        <div style="margin-top:-20px;">
            <h4 ><strong>

                    ปีการศึกษา ๒๕๖๒
                </strong>
            </h4>
        </div>
      </div>
    <table  >

      <tr >
        <td colspan="2" >
          <strong>สังกัดสถานศึกษา</strong> <u>{{$data['schooltype']}}</u>

        </td>

      </tr>
      <tr>
            <td width="50%">
                    <strong>รหัสสถานศึกษา</strong> <u>{{$data['schoolcode']}}</u>

                  </td>
                  <td width="50%">
                        <strong>ชื่อสถานศึกษา</strong> <u>{{$data['schoolname']}}</u>
                      </td>


      </tr>
      <tr>
<td>
        <strong>ตำบล/แขวง</strong> <u>{{$data['tambon']}}</u>
</td>
<td>
        <strong>อำเภอ/เขต</strong> <u>{{$data['district']}}</u>
</td>

      </tr>
      <tr>
            <td>
                    <strong>จังหวัด</strong> <u>{{$data['province']}}</u>
            </td>
            <td>
                    <strong>รหัสไปรษณีย์</strong> <u>{{$data['zip']}}</u>
            </td>
      </tr>
      <tr>
            <td>
                    <strong>เบอร์โทรศัพท์</strong> <u>{{$data['phone1']}}</u>
            </td>
            <td>
                    <strong>โทรสาร</strong> <u>{{$data['phone2']}}</u>
            </td>
      </tr>

      <tr>
            <td colspan="2">
                    <strong>เปิดสอนระดับ</strong> <u>{{$data['schoolopentype']}}</u>
            </td>

      </tr>
      <tr>
            <td colspan="2">
                    <strong>ชื่อผู้บริหารสถานศึกษา</strong> <u>{{$data['techerleader']}}</u>
            </td>

      </tr>
      <tr>
            <td colspan="2">
                    <strong>ชื่อครูผู้รับผิดชอบ</strong> <u>{{$data['techer']}}</u>
            </td>

      </tr>
      <tr>
            <td >
                    <strong>เบอร์โทรศัพท์</strong> <u>{{$data['tphone']}}</u>
            </td>
            <td >
                    <strong>อีเมล</strong> <u>{{$data['email']}}</u>
            </td>

      </tr>



    </table>
    <div align="center" style="margin-top:40px;">
            <strong>รับรองตามนี้</strong> <br>
            <strong>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;)</strong>
                    <div style="margin-top:-10px">
                            <strong >ตำแหน่ง........................................</strong>
                    </div>
                    <div style="margin-top:-20px">
                    <strong style="margin-top:-20px">วันที่..........เดือน................พ.ศ.........</strong>
                </div>
       </div>
  </body>
</html>
