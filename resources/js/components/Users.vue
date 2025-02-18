<template>
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
      <el-form-item label="Name" prop="name">
        <el-input v-model="ruleForm.name" type="text" autocomplete="off" />
      </el-form-item>
      <el-form-item label="Email" prop="email">
        <el-input v-model="ruleForm.email" type="email" autocomplete="off" />
      </el-form-item>
      <el-form-item label="Password" prop="pass">
        <el-input v-model="ruleForm.password" type="password" autocomplete="off" />
      </el-form-item>
      <el-form-item>
        <el-button type="primary" @click="submitForm(ruleFormRef)">Submit</el-button>
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
  name:'',
  email: '',
  password: '',
})

const rules = reactive<FormRules<typeof ruleForm>>({
  name: [{ required: true, message: 'Please input name', trigger: 'blur' }],
  email: [{ required: true, message: 'Please input email', trigger: 'blur' }],
  password: [{ required: true, message:"Please input password", trigger: 'blur' }],
})

const submitForm = (formEl: FormInstance | undefined) => {
  if (!formEl) return
  formEl.validate(async(valid) => {
    if (valid) {
      console.log('Form valid, submitting...')
      await RegisterUser();
    } else {
      console.log('Form invalid')
    }
  })
}

const RegisterUser = async () => {
  try {
    const response = await axios.post('http://127.0.0.1:8000/api/userRegister', ruleForm)
    console.log('User registered successfully', response.data)
  } catch (error) {
    console.error('Error registering user', error)
  }
}

const resetForm = (formEl: FormInstance | undefined) => {
  if (!formEl) return
  formEl.resetFields()
}
</script>

<style scoped>
/* Contenedor para centrar el formulario */
.form-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f3f4f6; /* Color de fondo de la página */
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

.el-button[type="primary"] {
  background-color: #409eff;
  color: #fff;
  border-color: #409eff;
}

.el-button[type="primary"]:hover {
  background-color: #66b1ff;
}

.el-button:hover {
  background-color: #f2f2f2;
  border-color: #ddd;
}

.el-button:focus {
  box-shadow: 0 0 0 3px rgba(64, 158, 255, 0.3);
}
</style>