const vue = Vue.createApp({
    data() {
      return { 
          data:[],
          newMessage:"",
        }
      },
        methods: {
          add:function() {
            this.data.push({index:this.data.length+1,label:this.newMessage});
            this.newMessage="";
            },
        }
  })
  vue.mount('#test')