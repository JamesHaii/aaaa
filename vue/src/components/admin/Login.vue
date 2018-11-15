<template>
    <el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="100px" class="demo-ruleForm">
        <el-form-item label="用户名称" prop="name">
            <el-input v-model="ruleForm.name"></el-input>
        </el-form-item>
        <el-form-item label="密码" prop="pass">
                <el-input type="password" v-model="ruleForm.pass"></el-input>
        </el-form-item>
         <el-form-item>
            <el-button type="primary" @click="submitForm('ruleForm')">登录</el-button>
            <el-button @click="resetForm('ruleForm')">重置</el-button>
         </el-form-item>
    </el-form>
</template>
<script>
export default {
  data() {
    // var validatePass = (rule, value, callback) => {
    //   if (value === "") {
    //     callback(new Error("请输入密码"));
    //   } else {
    //     callback();
    //   }
    // }

    return {
      ruleForm: {
        name: "",
        pass: ""
      },
      rules: {
        name: [
          { required: true, message: "请输输入用户名", trigger: "blur" },
          { min: 2, max: 10, message: "长度在 3 到 10 个字符", trigger: "blur" }
        ],
        // pass: [{ validator: validatePass, trigger: "blur" }]此处的写法要配合上面的var validatePass, 但是下面的写法快
        pass: [{ required: true, message: "请输password", trigger: "blur" }]
      }
    };
  },
  methods: {
    submitForm(formName) {
      this.$refs[formName].validate((valid, obj) => {
        if (valid) {
          fetch("/api/site/login", {
            method: "post",
            body: JSON.stringify({
              name: this.ruleForm.name,
              pwd: this.ruleForm.pass
            })
          })
            .then(res => res.json())
            .then(res => {
              if (res.code === 200) {
                this.$message({
                  message: "登录成功，正在跳转...",
                  duration: 1500,
                  type: "success",
                  onClose: ()=>{
                    this.$router.push({ path: "/" });
                  }
                });
              } else {
                this.$message({
                  message: "密码不正确",
                  type: "error"
                });
              }
            });
        } else {
          console.log("error submit!!");
          return false;
        }
      });
    },
    resetForm(formName) {
      this.$refs[formName].resetFields();
    }
  }
};
</script>
<style>
.btn {
  display: block;
  margin: 0 auto;
}
.pwd,
.user {
  padding: 15px;
  width: 300px;
  margin: 0 auto;
}
</style>

