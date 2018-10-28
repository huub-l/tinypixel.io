<template>
    <div>
        <h4>{{title}}</h4>
        <b-message title="Default" :active.sync="isActive"></b-message>
    </div>
</template>

<script>
export default {
  mounted() {
    this.helloWorld();
  },
  props: ["title"],
  data() {
    return {
      isActive: true
    };
  },
  methods: {
    helloWorld() {
      console.log("{{title}}");
    }
  }
};
</script>
