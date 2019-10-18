<script type="text/x-template" id="post-box">

  <div class="card box">
    <h3>TITOLO: @{{name}}</h3>
    <p v-show='desc'><b>TEXT:</b> @{{desc}}</p>
    <p><b>DATE:</b> @{{date}}</p>

  </div>

</script>


<script type="text/javascript">

  Vue.component('post-box', {

    template: '#post-box',
    props: {

      id: Number,
     name: String,
     desc: String,
     date: String
   }

 });

</script>
