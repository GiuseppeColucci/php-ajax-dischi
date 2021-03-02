new Vue({
    el:'#app',
    data:{
        arrayMusic:[],
    },
    mithods:{

    },
    mounted() {
		let self=this
		axios.get(' http://localhost:8888/php-ajax-dischi/app/server.php')
              .then(function(element) {
               const arryDisck=(element.data.response);
			   self.arrayMusic=arryDisck;  
              });
       
      }

})//fine di vue
console.log('tutto ok')