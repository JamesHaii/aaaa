<template>
<div>
<el-form :model="numberValidateForm"  ref="numberValidateForm" >
    <el-form-item>
            <el-form-item label="博客标题:">
                <el-input placeholder="请输入内容" v-model="numberValidateForm.title"></el-input>
            </el-form-item>
            <el-form-item label="博客内容:">
                <el-input type="textarea" :rows="7" placeholder="请输入内容" v-model="numberValidateForm.textarea"></el-input>
            </el-form-item>
    </el-form-item>
    <el-form-item>
                <el-button type="primary" @click="submitForm()">提交</el-button>
                <el-button @click="resetForm('numberValidateForm')">重置</el-button>
    </el-form-item>
</el-form>
</div>
</template>
<script>
export default {
    data(){
        return {
            numberValidateForm: {
                   title:'',
                textarea:'',
            }
        }
    },
    methods: {
        submitForm(){
            console.log(this.numberValidateForm.title)
            console.log(this.numberValidateForm.textarea)
            },
        resetForm(formName) {
            this.$refs[formName].resetFields();
      }
    }
}
</script>

<style>

</style>


