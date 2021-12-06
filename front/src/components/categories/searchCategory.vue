<template>
  <section>
    <!-- <div class="container p-4">
    <div>
      <form class="input-group p-4">
        <input
          type="search"
          class="form-control rounded"
          placeholder="Search"
          v-model="search"
          aria-label="Search"
          aria-describedby="search-addon"
        />
        <button type="submit" class="btn btn-outline-warning ml-4">
          search
        </button>
      </form>
    </div>
  </div> -->
  </section>
</template>
<script>
export default {
  data() {
    return {
      search: "",
    };
  },
};
</script>

<style scoped>
input,
button {
  border: 1px solid #ccc;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
}
</style>