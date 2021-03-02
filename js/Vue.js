new Vue({
    el:'#app',
    data:{
        arrayMusic:[],
    },
    mithods:{

    },
    mounted() {
		let self=this
		axios.get('http://localhost:8888/php-ajax-dischi/app/server.php')
              .then(function(response) {
               const arryDisck=response.data;
			   self.arrayMusic=arryDisck;  
            console.log(response)
              });
       
      }

})//fine di vue
console.log('tutto ok')