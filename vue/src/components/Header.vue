<template>
    <el-menu
  :default-active="activeIndex2"
  class="el-menu-demo"
  mode="horizontal"
  background-color="#545c64"
  text-color="#fff"
  active-text-color="#ffd04b">
  <el-menu-item index="1">首页</el-menu-item>
  <el-menu-item index="1">消息中心</el-menu-item>
</el-menu>
</template>
<script>
export default {
    name:'Header',
        data() {
      return {
        activeIndex: '1',
        activeIndex2: '0'
      };
    },
    methods: {
  
    }
}
</script>
<style>
    .imgs {
        height: 40px;
        max-width: 40px;
        position: right;
    }
</style>

