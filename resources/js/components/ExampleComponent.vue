<template>
   
                    <div >
                        <!-- <el-row>
  <el-button icon="el-icon-search" circle></el-button>
  <el-button type="primary" icon="el-icon-edit" circle></el-button>
  <el-button type="success" icon="el-icon-check" circle></el-button>
  <el-button type="info" icon="el-icon-message" circle></el-button>
  <el-button type="warning" icon="el-icon-star-off" circle></el-button>
  <el-button type="danger" icon="el-icon-delete" circle></el-button>
</el-row> -->
         <el-steps :active="this.active">
  <el-step title="Step 1" icon="el-icon-edit">




  </el-step>
  <el-step title="Step 2" icon="el-icon-upload"></el-step>
  <el-step title="Step 3" icon="el-icon-picture"></el-step>
</el-steps>

<el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="120px" class="demo-ruleForm"  style="margin-top:30px;">
     <!-- <el-form-item label="ประเภท" prop="region">
    <el-select v-model="ruleForm.region" placeholder="ประเภทสนามสอบ">
      <el-option label="นักธรรม" value="1"></el-option>
      <el-option label="ธรรมศึกษา" value="2"></el-option>
    </el-select>
  </el-form-item> -->
  <div v-if="active===1">

  <el-form-item label="สำนักเรียน" prop="ss">
       <model-list-select :list="datasnr"
                     v-model="ruleForm.snr"
                     option-value="id"
                  v-on:input="selectsnr()"
                     :custom-text="customdata2"
                     placeholder="select item">
  </model-list-select>
    <!-- <el-input  v-model="ruleForm.ss" :maxlength="7" :minlength="7"></el-input> -->
  </el-form-item>
  <el-form-item label="รหัสสนามสอบ" prop="ss">
       <model-list-select :list="datassfiter"
                     v-model="ruleForm.ss"
                     option-value="id"
                     	:isDisabled="show"
                           v-on:input="selectss()"
                     :maxlength="7"
                     :custom-text="customdata"
                     placeholder="select item" >
  </model-list-select>
    <!-- <el-input  v-model="ruleForm.ss" :maxlength="7" :minlength="7"></el-input> -->
  </el-form-item>
   <el-form-item label="ชื่อผู้ส่งเอกสาร" prop="fullname">
    <el-input v-model="ruleForm.fullname" v-on:input="selectss()"></el-input>
  </el-form-item>
    <el-form-item label="ตำแหน่ง/หน้าที่" prop="position">
    <el-input v-model="ruleForm.position" v-on:input="selectss()"></el-input>
  </el-form-item>
    <el-form-item label="เบอร์โทรศัพท์" prop="phone">
    <el-input v-model="ruleForm.phone" type="number" v-on:input="selectss()"></el-input>
  </el-form-item>
 
 
  <el-form-item label="หมายเหตุ" prop="memo">
    <el-input type="textarea" v-model="ruleForm.memo"></el-input>
  </el-form-item>
   </div>
  <div v-if="active===2">

      <div>

          <!-- <b-form-group label="Default:" label-for="file-default" label-cols-sm="2">
    <b-form-file multiple id="file-default"></b-form-file>
  </b-form-group> -->

 <b-form-group id="input-group-2" label="สมุดลงนามกรรมการ:" label-for="input-2" >      </b-form-group>
          
      <template>
  <b-form-file multiple  v-model="ruleForm.img1" @change="fieldChange">
   <template slot="file-name" slot-scope="{ names }">
     <b-badge variant="dark">{{ names[0] }}</b-badge>
     <b-badge v-if="names.length > 1" variant="dark" class="ml-1">
       + {{ names.length - 1 }} More files
     </b-badge>
   </template>
  </b-form-file>
</template>
<div class="mt-4"></div>
     <b-form-group id="input-group-2" label="บัญชีรับใบตอบ:" label-for="input-2" >      </b-form-group>
      <template>
  <b-form-file multiple v-model="ruleForm.img2" @change="fieldChange2">
   <template slot="file-name" slot-scope="{ names }">
     <b-badge variant="dark">{{ names[0] }}</b-badge>
     <b-badge v-if="names.length > 1" variant="dark" class="ml-1">
       + {{ names.length - 1 }} More files
     </b-badge>
   </template>
  </b-form-file>
</template>
<div class="mt-4"></div>
     <b-form-group id="input-group-2" label="ใบตอบวิชา ธรรม พุทธ วินัย:" label-for="input-2" >      </b-form-group>
      <template>
  <b-form-file multiple v-model="ruleForm.img3" @change="fieldChange3">
   <template slot="file-name" slot-scope="{ names }">
     <b-badge variant="dark">{{ names[0] }}</b-badge>
     <b-badge v-if="names.length > 1" variant="dark" class="ml-1">
       + {{ names.length - 1 }} More files
     </b-badge>
   </template>
  </b-form-file>
</template>
<div class="mt-4"></div>
     <b-form-group id="input-group-2" label="ใบตอบวิชากระทู้:" label-for="input-2" >      </b-form-group>
      <template>
  <b-form-file multiple v-model="ruleForm.img4" @change="fieldChange4">
   <template slot="file-name" slot-scope="{ names }">
     <b-badge variant="dark">{{ names[0] }}</b-badge>
     <b-badge v-if="names.length > 1" variant="dark" class="ml-1">
       + {{ names.length - 1 }} More files
     </b-badge>
   </template>
  </b-form-file>
</template>
<div class="mt-4"></div>
     <b-form-group id="input-group-2" label="บัญชีขอแก้ไขรายชื่อ:" label-for="input-2" >      </b-form-group>
      <template>
  <b-form-file multiple v-model="ruleForm.img5" @change="fieldChange5">
   <template slot="file-name" slot-scope="{ names }">
     <b-badge variant="dark">{{ names[0] }}</b-badge>
     <b-badge v-if="names.length > 1" variant="dark" class="ml-1">
       + {{ names.length - 1 }} More files
     </b-badge>
   </template>
  </b-form-file>
</template>
<div class="mt-4"></div>
     <b-form-group id="input-group-2" label="อื่นๆ ถ้ามี:" label-for="input-2" >      </b-form-group>
      <template>
  <b-form-file multiple v-model="ruleForm.img6" @change="fieldChange6">
   <template slot="file-name" slot-scope="{ names }">
     <b-badge variant="dark">{{ names[0] }}</b-badge>
     <b-badge v-if="names.length > 1" variant="dark" class="ml-1">
       + {{ names.length - 1 }} More files
     </b-badge>
   </template>
  </b-form-file>
</template> 
</div>
 
  
   

  </div>
  <div v-if="active===3">
    <b-card class="mt-3" header="Form Data Result">
      <!-- <pre class="m-0">{{ form }}</pre> -->
         สนามสอบ: 
         <div v-for="(item, index) in datassfiter" :key="index" >
             <div v-if="item.id == ruleForm.ss">{{item.id}} {{item.ss_name}} {{item.province_name}}</div>
         </div>
      ชื่อผู้ส่งเอกสาร: {{ ruleForm.fullname }} <br>
      ตำแหน่ง: {{ ruleForm.position }} <br>
      เบอร์โทรศัพท์: {{ ruleForm.phone }} <br>
       หมายเหตุ: {{ ruleForm.memo }} <br>
      จำนวนสมุดลงนามกรรมการ: {{ ruleForm.img1.length || 0}} ภาพ<br>
        จำนวนบัญชีรับใบตอบ: {{ ruleForm.img2.length || 0}} ภาพ<br>
           จำนวนใบตอบวิชา ธรรม พุทธ วินัย: {{ ruleForm.img3.length || 0}} ภาพ<br>
              จำนวนใบตอบวิชากระทู้: {{ ruleForm.img4.length || 0}} ภาพ<br>
                 จำนวนบัญชีขอแก้ไขรายชื่อ: {{ ruleForm.img5.length || 0}} ภาพ<br>
                      จำนวนอื่นๆ: {{ ruleForm.img6.length || 0}} ภาพ<br>
    </b-card>


  </div>
  <!-- <el-form-item>
    <el-button type="primary" @click="submitForm('ruleForm')">Create</el-button>
    <el-button @click="resetForm('ruleForm')">Reset</el-button>
  </el-form-item> -->
</el-form>
<el-button style="margin-top: 12px;" @click="back" v-if="this.active > 1">กลับ</el-button>
<el-button style="margin-top: 12px;" @click="next" v-if="this.active < 3 " v-bind:disabled="shownext">ถัดไป</el-button>
<el-button style="margin-top: 12px;" @click="submitdata()" v-if="this.active == 3" v-bind:disabled="spinner">
   
   <b-spinner small label="Small Spinner" v-if="spinner"></b-spinner>
  ส่งข้อมูล</el-button>
    <!-- {{this.ruleForm.snr}}
      {{this.show}} -->
       <!-- {{this.ruleForm.fullname.length}}  -->
    </div>

</template>

<script>
import { ModelListSelect } from 'vue-search-select'

    export default {
        
        components: {
      ModelListSelect
    },
        created(){
        //  this.ssall();
                this.snrall(); 
        },
  
          data() {
      return {
          dataSs:[],
 datassfiter:[],
            datasnr:[],
           ruleForm: {
          ss: '',
             snr: '',
          fullname: '',
          position: '',
          phone: '',
          memo: '',
        
      img1:[],
        img2:{},
        img3:{},
        img4:{},
        img5:{},
         img6:{},
        },
        show:true,
        shownext:true,
        spinner:false,
        form: {
         
          },
        rules: {
          fullname: [
               {  required: true, message: 'กรุณากรอกชื่อผู้ส่งเอกสาร', trigger: 'blur' }

            // { min: 3, max: 5, message: 'Length should be 3 to 5', trigger: 'blur' }
          ],
            ssr: [
            {  type: 'number', required: true, message: 'กรองเฉพาะตัวเลข-รหัสสนามสอบให้ถูกต้อง', trigger: 'blur' }
            // { min: 6, max: 7, message: 'ใส่รหัสสนามสอบธรรมศึกษาและนักธรรม 6 ถึง 7 หลัก', trigger: 'blur' }
          ],
         position: [
            {  required: true, message: 'กรุณากรอกตำแหน่ง หรือหน้าที่', trigger: 'blur' }
            // { min: 6, max: 7, message: 'ใส่รหัสสนามสอบธรรมศึกษาและนักธรรม 6 ถึง 7 หลัก', trigger: 'blur' }
          ],  phone: [
            {  required: true, message: 'เบอร์โทรศัพท์สำหรับติดต่อกลับ', trigger: 'blur' }
            // { min: 6, max: 7, message: 'ใส่รหัสสนามสอบธรรมศึกษาและนักธรรม 6 ถึง 7 หลัก', trigger: 'blur' }
          ],  memo: [
            {   message: 'กรองเฉพาะตัวเลข-รหัสสนามสอบให้ถูกต้อง', trigger: 'blur' }
            // { min: 6, max: 7, message: 'ใส่รหัสสนามสอบธรรมศึกษาและนักธรรม 6 ถึง 7 หลัก', trigger: 'blur' }
          ],
        },
      
        active: 1
      };
    },
          methods: {
                fieldChange(e){
                    this.ruleForm.img1= [];
                let selectedFiles=e.target.files;
                if(!selectedFiles.length){
                    return false;
                }
                for(let i=0;i<selectedFiles.length;i++){
                   this.ruleForm.img1.push(selectedFiles[i]);
                }
                console.log(this.ruleForm.img1);
            },
                 fieldChange2(e){
                    this.ruleForm.img2= [];
                let selectedFiles=e.target.files;
                if(!selectedFiles.length){
                    return false;
                }
                for(let i=0;i<selectedFiles.length;i++){
                   this.ruleForm.img2.push(selectedFiles[i]);
                }
           
            },
                 fieldChange3(e){
                    this.ruleForm.img3= [];
                let selectedFiles=e.target.files;
                if(!selectedFiles.length){
                    return false;
                }
                for(let i=0;i<selectedFiles.length;i++){
                   this.ruleForm.img3.push(selectedFiles[i]);
                }
               
            },
                 fieldChange4(e){
                    this.ruleForm.img4= [];
                let selectedFiles=e.target.files;
                if(!selectedFiles.length){
                    return false;
                }
                for(let i=0;i<selectedFiles.length;i++){
                   this.ruleForm.img4.push(selectedFiles[i]);
                }
          
            },
                 fieldChange5(e){
                    this.ruleForm.img5= [];
                let selectedFiles=e.target.files;
                if(!selectedFiles.length){
                    return false;
                }
                for(let i=0;i<selectedFiles.length;i++){
                   this.ruleForm.img5.push(selectedFiles[i]);
                }
               
            },
                 fieldChange6(e){
                    this.ruleForm.img6= [];
                let selectedFiles=e.target.files;
                if(!selectedFiles.length){
                    return false;
                }
                for(let i=0;i<selectedFiles.length;i++){
                   this.ruleForm.img6.push(selectedFiles[i]);
                }
         
            },
          selectss(){
               if(this.ruleForm.ss.length == 0){
     this.shownext = true;
              }
              if(this.ruleForm.fullname.length == 0){
     this.shownext = true;
              }
                  if(this.ruleForm.phone.length == 0){
     this.shownext = true;
              }
               if(this.ruleForm.position.length == 0){
     this.shownext = true;
              }
              if(this.ruleForm.fullname.length > 0 && this.ruleForm.position.length > 0 && this.ruleForm.phone.length > 0 && this.ruleForm.ss > 0) {
                 this.shownext = false; 
              }
           
          },
             selectsnr(){
                   axios.get('api/ss/fitter/'+this.ruleForm.snr)
    .then(response => {
      this.datassfiter = response.data
    this.show=false;
    })
    .catch(error => {
      console.log(error)
    })
        
              },
               customdata (item) {
        return `${item.id} - ${item.ss_name} - ${item.province_name}`
      },
          customdata2 (item) {
            
        return `${item.snr_name} - ${item.nikay_name} - ${item.province_name}`
      },
 
              ssall(){
      axios.get('api/ss/all')
    .then(response => {
      this.dataSs = response.data
    
    })
    .catch(error => {
      console.log(error)
    })
              },
                       snrall(){
      axios.get('api/snr/all')
    .then(response => {
      this.datasnr = response.data
    
    })
    .catch(error => {
      console.log(error)
    })
              },
             
      next() {
        if (this.active++ > 2) this.active == 3;
  if(this.active > 3) {
                this.active == 3 ;
                
                }
      },
      back(){
          if (this.active-- < 1) this.active == 1;
      },
           submitdata(){
this.spinner = true;
             
                let formData = new FormData();
                    formData.append('ss',this.ruleForm.ss);
                    formData.append('fullname',this.ruleForm.fullname);
                    formData.append('position',this.ruleForm.position);
                    formData.append('phone',this.ruleForm.phone);
                    formData.append('memo',this.ruleForm.memo);

     for(let i=0; i<this.ruleForm.img1.length;i++){
                    formData.append('img1[]',this.ruleForm.img1[i]);
                }
             
   for(let i=0; i<this.ruleForm.img2.length;i++){
                    formData.append('img2[]',this.ruleForm.img2[i]);
                }
                   for(let i=0; i<this.ruleForm.img3.length;i++){
                    formData.append('img3[]',this.ruleForm.img3[i]);
                }
                   for(let i=0; i<this.ruleForm.img4.length;i++){
                    formData.append('img4[]',this.ruleForm.img4[i]);
                }
                   for(let i=0; i<this.ruleForm.img5.length;i++){
                    formData.append('img5[]',this.ruleForm.img5[i]);
                }
                   for(let i=0; i<this.ruleForm.img6.length;i++){
                    formData.append('img6[]',this.ruleForm.img6[i]);
                }


                axios.post('/api/sheet',formData,{  headers: {
        'Content-Type': 'multipart/form-data'
    }}).then(response => {
                  this.showAlert()

                    setTimeout(() => window.location.href = "/", 10000);
                  
    // this.spinner = false;
                });
            },
       submitForm(formName) {
        this.$refs[formName].validate((valid) => {
          if (valid) {
            alert('submit!');
          } else {
            console.log('error submit!!');
            return false;
          }
        });
      },
      resetForm(formName) {
        this.$refs[formName].resetFields();
      },
       showAlert(){
            // Use sweetalert2
            this.$swal(
               'ส่งเอกสาร!',
  'ให้สำนักงานแม่กองธรรมแล้วรอเจ้าหน้าที่ตรวจสอบ!!',
  'success');
        }
        
    },
       mounted() {
            //  this.selectsnr();
//    this.ssd = this.dataSs.find(dataSs => 
//                (  dataSs.snr_id == this.ssr)  );
  
            // console.log('Component mounted.')
           
        },
        computed:{
     
        }
    }
    
</script>
