<template>
<el-form ref="form" :model="form" label-width="180px">

    <el-form-item label="สังกัดสถานศึกษา">
 <el-select v-model="form.schooltype" placeholder="ประเภทสถานศึกษา">
    <el-option
      v-for="item in options1"
      :key="item.value"
      :label="item.label"

      :value="item.value">
    </el-option>
  </el-select>
    </el-form-item>
  <el-form-item label="รหัสสถานศึกษา">
    <el-input
  type="text"
  placeholder="รหัสสถานศึกษา ๑๐ หลัก"
  v-model="form.schoolcode"
  maxlength="10"
  show-word-limit
>
</el-input>
  </el-form-item>
   <el-form-item label="ชื่อสถานศึกษา">
    <el-input v-model="form.schoolname"></el-input>
  </el-form-item>


  <el-row :gutter="24">
       <el-form-item label="ที่อยู่สถานศึกษา">
  <el-col :span="12"> <el-input v-model="form.tambon" placeholder="ตำบล"></el-input></el-col>
  <el-col :span="12"> <el-input v-model="form.district" placeholder="อำเภอ"></el-input></el-col>

  </el-form-item>
</el-row>
  <el-row :gutter="24">
       <el-form-item label="">
  <el-col :span="12"> <el-input v-model="form.province" placeholder="จังหวัด"></el-input></el-col>
  <el-col :span="12"> <el-input v-model="form.zip" placeholder="ไปรษณี"></el-input></el-col>
  </el-form-item>
</el-row>
 <el-row :gutter="24">
 <el-form-item label="">
  <el-col :span="12"> <el-input v-model="form.phone1" placeholder="โทรศัพท์"></el-input></el-col>
  <el-col :span="12"> <el-input v-model="form.phone2" placeholder="โทรสาร"></el-input></el-col>
  </el-form-item>
</el-row>
<el-row :gutter="24">
       <el-form-item label="ชื่อผู้อำนวยการสถานศึกษา">
  <el-col :span="24"> <el-input v-model="form.techerleader" placeholder="ชื่อ-นามสกุล"></el-input></el-col>
  <!-- <el-col :span="12"> <el-input v-model="form.name" placeholder="เบอร์โทรศัพท์"></el-input></el-col> -->

  </el-form-item>
</el-row>
<el-row :gutter="24">
       <el-form-item label="ชื่อครูผู้รับดำเนินการ">
  <el-col :span="12"> <el-input v-model="form.techer" placeholder="ชื่อ-นามสกุล"></el-input></el-col>
  <el-col :span="12"> <el-input v-model="form.tphone" placeholder="เบอร์โทรศัพท์"></el-input></el-col>

  </el-form-item>
  </el-row>
<el-form-item label="เปิดสอนระดับ">
 <el-select v-model="form.schoolopentype" placeholder="เลือกระดับ">
    <el-option
      v-for="item in options"
      :key="item.value"
      :label="item.label"
      :value="item.value">
    </el-option>
  </el-select>
    </el-form-item>

   <el-form-item label="ต้องการที่จะ">
    <el-radio-group v-model="form.want">
      <el-radio label="ขอรับรหัสผู้ใช้-รหัสผ่าน"></el-radio>
      <el-radio label="ขอกู้คืนรหัสผ่าน"></el-radio>
    </el-radio-group>
  </el-form-item>

   <el-form-item label="Email ในการรับข้อมูล">
    <el-input v-model="form.email" type="email"></el-input>
  </el-form-item>
  <el-row :gutter="24">
       <el-form-item label="ไฟล์เอกสาร">
  <el-col :span="24">

      <div>
  <b-card title="สร้างเอกสาร" >
    <b-card-text>
 <el-button type="success" @click="generatepdf">สร้างเอกสาร บัญชีแจ้งจำนวนผู้ขอเข้าสอบธรรมศึกษา</el-button>

       นำให้กับผู้อำนวยการสถานศึกษา เซ็นรับทราบและนำมาอัพโหลดเข้าสู่ระบบ
    </b-card-text>


  </b-card>
</div>
       </el-col>


  </el-form-item>
</el-row>
   <el-form-item label="แนบไฟล์เอกสาร">
           <template>
      <b-form-file  v-model="img" @change="fieldChange">
       <template slot="file-name" slot-scope="{ names }">
         <b-badge variant="dark">{{ names[0] }}</b-badge>
         <b-badge v-if="names.length > 1" variant="dark" class="ml-1">
           + {{ names.length - 1 }} ไฟล์เพิ่มเติม
         </b-badge>
</template>
  </b-form-file>
</template>
  </el-form-item>

  <el-form-item>
    <el-button type="primary" @click="onSubmit">ส่งข้อมูล</el-button>
    <!-- <el-button>ยกเลิก</el-button> -->
  </el-form-item>
</el-form>
</template>

<script>
  export default {
    data() {
      return {
           options1: [{
          value: 'สำนักงานคณะกรรมการการศึกษาขั้นพื้นฐาน',
          label: 'สำนักงานคณะกรรมการการศึกษาขั้นพื้นฐาน'
        }, {
          value: 'สำนักงานคณะกรรมการส่งเสริมการศึกษาเอกชน',
          label: 'สำนักงานคณะกรรมการส่งเสริมการศึกษาเอกชน'
        }, {
          value: 'กรมส่งเสริมการปกครองท้องถิ่น',
          label: 'กรมส่งเสริมการปกครองท้องถิ่น'
        }, {
          value: 'สำนักการศึกษา กรุงเทพมหานคร',
          label: 'สำนักการศึกษา กรุงเทพมหานคร'
        }, {
          value: 'สำนักงานคณะกรรมการการอาชีวศึกษา',
          label: 'สำนักงานคณะกรรมการการอาชีวศึกษา'
        }, {
          value: 'สำนักงานส่งเสริมการศึกษานอกระบบและการศึกษาตามอัธยาศัย',
          label: 'สำนักงานส่งเสริมการศึกษานอกระบบและการศึกษาตามอัธยาศัย'
        }, {
          value: 'สำนักงานพระพุทธศาสนาแห่งชาติ',
          label: 'สำนักงานพระพุทธศาสนาแห่งชาติ'
        }, {
          value: 'ไม่ทราบ',
          label: 'ไม่ทราบ'
        }

        ],
            options: [{
          value: 'ประถม',
          label: 'ประถม'
        }, {
          value: 'มัธยม',
          label: 'มัธยม'
        },{
          value: 'ประถม-มัธยม',
          label: 'ประถม-มัธยม'
        }, {
          value: 'อุดมศึกษา',
          label: 'อุดมศึกษา'
        },  {
          value: 'อาชีวะศึกษา',
          label: 'อาชีวะศึกษา'
        }

        ],
        value: '',
  img: {},
        form: {
          schooltype: '',
          schoolcode: '',
          schoolname: '',
          tambon: '',
          district: '',
          province: '',
          zip: '',
          phone1:'',
          phone2:'',
          techerleader:'',
          techer:'',
          tphone:'',
          schoolopentype:'',
          want:'',
          email:'',


        }
      }
    },
    methods: {
generatepdf(){

  axios.post('/api/generatepdf', this.form,{
  responseType: 'blob', // important

  }).then(response => {
    const url = window.URL.createObjectURL(new Blob([response.data]));
  const link = document.createElement('a');
  link.href = url;
  link.setAttribute('download', 'file.pdf');
  document.body.appendChild(link);
  link.click();

    //    console.log(response);
                    // this.showAlert()
                    // setTimeout(() => window.location.href = "/", 10000);
                    // this.spinner = false;
                });
},
            fieldChange(e) {
                this.img = [];
                let selectedFiles = e.target.files;
                if (!selectedFiles.length) {
                    return false;
                }
                // for (let i = 0; i < selectedFiles.length; i++) {
                    this.img.push(selectedFiles);
                // }
                console.log(this.img);
            },
      onSubmit() {

           let formData = new FormData();

            formData.append('form', this.form);
            formData.append('img', this.form.img);
        console.log(this.form);
      },
           showAlert() {
                // Use sweetalert2
                this.$swal(
                    'ส่งเอกสาร!',
                    'ให้สำนักงานแม่กองธรรมแล้วรอเจ้าหน้าที่ตรวจสอบ!!',
                    'success');
            }
    }
  }
</script>

<style>

</style>
