<template>
    <div>
      <el-menu  :default-active="activeIndex" class="el-menu-demo" mode="horizontal" :ellipsis="false" @select="handleSelect">
        <el-menu-item><router-link to="/register">Registrar</router-link></el-menu-item>
      </el-menu>
    </div>
  
    <div class="form-container">
        <el-form
        ref="ruleFormRef"
        style="max-width: 500px; padding: 4cap; background: #fff; border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"
        :model="ruleForm"
        status-icon
        :rules="rules"
        label-width="auto"
        label-position="top"
        class="demo-ruleForm"
        >

        <el-form-item label="Email" prop="email">
            <el-input v-model="ruleForm.email" type="email" autocomplete="off" />
        </el-form-item>
        <el-form-item label="Password" prop="pass">
            <el-input v-model="ruleForm.password" type="password" autocomplete="off" />
        </el-form-item>
        <el-form-item>
            <el-button type="success" @click="submitLogin(ruleFormRef)">Submit</el-button>
            <el-button @click="resetForm(ruleFormRef)">Reset</el-button>
        </el-form-item>
        </el-form>
  </div>
  </template>
  
  <script lang="ts" setup>
  import { reactive, ref } from 'vue'
  import axios from 'axios'
  import type { FormInstance, FormRules } from 'element-plus'
  
  const ruleFormRef = ref<FormInstance>()
  
  
  const ruleForm = reactive({
    email:'',
    password: '',
  })
  
  const rules = reactive<FormRules<typeof ruleForm>>({
    email: [{ required: true, message: 'Please input email', trigger: 'blur' }],
    password: [{ required: true, message: 'Please input password', trigger: 'blur' }],
  })
  
  const submitLogin = (formEl: FormInstance | undefined) => {
    if (!formEl) return
    formEl.validate(async(valid) => {
      if (valid) {
        console.log('submit!')
        await LoginUser();
      } else {
        console.log('error submit!')
      }
    })
  }
  
  const LoginUser = async () => {
  try {
    const response = await axios.post('http://127.0.0.1:8000/api/userLogin', ruleForm)
    console.log('Login successfully', response.data)
  } catch (error) {
    console.error('Error Login ', error)
  }
}
  const resetForm = (formEl: FormInstance | undefined) => {
    if (!formEl) return
    formEl.resetFields()
  }
  </script>
  
  <style scoped>

a {
  text-decoration: none;
  color: inherit;
}  

.form-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f3f4f6;
}

.demo-ruleForm {
  background-color: #f9f9f9;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
}

.el-form-item {
  margin-bottom: 30px;
}

.el-form-item label {
  font-size: 12px;
  color: #333;
  font-weight: 500;
}

.el-input__inner {
  padding: 12px 20px;
  font-size: 16px;
  border-radius: 8px;
  border: 1px solid #ddd;
  transition: border-color 0.3s ease;
}

.el-input__inner:focus {
  border-color: #409eff;
  box-shadow: 0 0 4px rgba(64, 158, 255, 0.3);
}

.el-button {
  font-size: 16px;
  padding: 10px 20px;
  border-radius: 8px;
  margin-right: 10px;
}
</style>