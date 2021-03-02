new Vue({
    el:'#app',
    data:{
        arrayMusic:[],
    },
    mithods:{

    },
    mounted() {
		let self=this
		axios.get(' https://flynn.boolean.careers/exercises/api/array/music')
              .then(function(element) {
               const arryDisck=(element.data.response);
			   self.arrayMusic=arryDisck;  
              });
       
      }

})//fine di vue
console.log('tutto ok')