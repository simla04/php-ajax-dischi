// struttura vue 2
var app = new Vue({
el: '#app',
data: {
    arrayDischi: []

},
mounted() {

    axios.get('./api/index.php')
    .then((response)=>{
        // console.log(response.data)
        this.arrayDischi = response.data
    })

},
beforeUpdate() {

},
methods: {

}
})