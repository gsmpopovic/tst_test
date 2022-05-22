<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <form action="submit" method="post">
        <input type="hidden" name="_token" v-bind:value="csrf">
                            <input type="submit" name="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
  data () {
    return {
             csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),

        count : 0

    }
  },
  methods: {
    //   click(){
    //       this.count++;
    //   }
  },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
