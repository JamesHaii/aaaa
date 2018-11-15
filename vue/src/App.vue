<template>
  <div id="app">
    <el-container>
    <el-header><Header>顶部</Header></el-header>
    <el-container>
      <el-container>
        <el-main> <router-view/></el-main>
        <el-footer><Footer>底部</Footer></el-footer>
      </el-container>
    </el-container>
  </el-container>   
  </div>
</template>

<script>
import Header from "./components/Header";
import Footer from "./components/Footer";
export default {
  name: "App",
  components: {
    Header,
    Footer
  }
};
</script>

<style>
/* #app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
} */
</style>
