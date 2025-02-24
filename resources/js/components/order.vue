<template>
    <el-card>
      <el-row :gutter="20">
        <el-col :span="10">
          <el-row>
            <el-col :span="24">
              <img src="" alt="Green Plastic Logo" style="height: 60px;">
            </el-col>
          </el-row>
          <el-form label-position="top">
            <el-form-item label="Cliente:">
              <el-input v-model="form.cliente" />
            </el-form-item>
            <el-form-item label="Nit:">
              <el-input v-model="form.nit" />
            </el-form-item>
            <el-form-item label="Dirección de Entrega (confirmada)">
              <el-input v-model="form.direccion" />
            </el-form-item>
            <el-form-item label="Orden de compra">
              <el-input v-model="form.ordenCompra" />
            </el-form-item>
            <el-form-item label="Contacto comercial">
              <el-input v-model="form.contactoComercial" />
            </el-form-item>
            <el-form-item label="Telefono contacto">
              <el-input v-model="form.telefonoContacto" />
            </el-form-item>
          </el-form>
        </el-col>
  
        <el-col :span="7">
          <h4>Tipo de Orden (x)</h4>
          <el-checkbox-group v-model="form.tipoOrden">
            <el-checkbox label="Fabricación" />
            <el-checkbox label="Descargue Inv" />
            <el-checkbox label="Servicio Post Venta" />
          </el-checkbox-group>
  
          <el-form label-position="top">
            <el-form-item label="Factura No">
              <el-input v-model="form.facturaNo" style="width: 50%;"/>
            </el-form-item>
            <el-form-item label="Remisión No">
              <el-input v-model="form.remisionNo" style="width: 50%;"/>
            </el-form-item>
            <el-form-item label="Fecha QT">
              <el-date-picker v-model="form.fechaQT" type="date" />
            </el-form-item>
            <el-form-item label="Fecha de Entrega">
              <el-date-picker v-model="form.fechaEntrega" type="date" />
            </el-form-item>
            <el-form-item label="Fecha de Fabricación">
              <el-date-picker v-model="form.fechaFabricacion" type="date" />
            </el-form-item>
            <el-row :gutter="20">
                <el-col :span="12">
                    <el-form-item label="Comercial a Cargo">
                        <el-input v-model="form.comercialACargo" />
                    </el-form-item>
                    </el-col>
                    <el-col :span="8">
                    <el-form-item label="cotizaciones" style="margin-left: 10px;">
                        <el-input v-model="form.cotizaciones" />
                    </el-form-item>
                </el-col>
            </el-row>

            <!-- <el-row :gutter="10" style="margin-top: 20px;">
        <el-col :span="16">
          <p>Incluir valor transporte en la factura ( <b>S / N</b> )</p>
          <p>Facturar transporte con <b>IVA</b></p>
          <p>QT sin valor de transporte para el Cliente ( <b>X</b> )</p>
        </el-col>
        <el-col :span="8">
          <el-form label-position="left">
            <el-form-item>
              <el-button type="info">NO</el-button>
              <span> Valor unitario a cobrar</span>
              <el-input style="width: 60px;" />
            </el-form-item>
            <el-form-item>
              <el-button type="info">NO</el-button>
              <span> Transporte incluido en el precio? (<b>S/N</b>)</span>
              <el-input style="width: 60px;" />
            </el-form-item>
            <el-form-item>
              <el-button type="success">SI</el-button>
              <span> Cotización o estimado a pagar por el transporte</span>
            </el-form-item>
          </el-form>
        </el-col>
      </el-row> -->

        </el-form>
        </el-col>
  
        <el-col :span="7">
          <el-card>
            <h4>Totales</h4>
            <el-form label-position="top">
              <el-form-item label="Unidades Fabricación">
                <el-input v-model="form.unidadesFabricacion" disabled />
              </el-form-item>
              <el-form-item label="Unidades Descargue">
                <el-input v-model="form.unidadesDescargue" disabled />
              </el-form-item>
            </el-form>
            <h3 class="text-2xl font-bold">OT</h3>
            <el-input v-model="form.ordenNo" placeholder="Orden No" />
          </el-card>
        </el-col>
      </el-row>
    </el-card>

  </template>
  


<script lang="ts" setup>
import { reactive } from 'vue'


const form = reactive({
  cliente: '',
  nit: '',
  direccion: '',
  ordenCompra: '',
  contactoComercial: '',
  telefonoContacto: '',
  tipoOrden: [],
  facturaNo: '',
  remisionNo: '',
  fechaQT: '',
  fechaEntrega: '',
  fechaFabricacion: '',
  comercialACargo: '',
  cotizaciones: '',
  unidadesFabricacion: '',
  unidadesDescargue: '',
  ordenNo: '',
})

const onSubmit = () => {
  console.log('submit!')
}
</script>

<style scoped>



</style>


