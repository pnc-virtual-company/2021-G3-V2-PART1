<template>
  <section>
    <nav-bar> </nav-bar>
    <cardAll-event :events='dataEvent'></cardAll-event>
  </section>
</template>

<script>
export default {
  data(){
    return{
      dataEvent: [
          {
            title:'The Night Of Sky',
            description:'The night is have alot of star and we find the most of the program in the mood that  I can show the most value',
            date: '12-01-2021 12:32 AM',
            Member:'12345 member'
          },
          {
            title:'The Night at Night',
            description:'The night is have alot of star and we find the most of the program in the mood that  I can show the most value',
            date: '12-01-2021 12:32 AM',
            Member:'12345 member'
          },
      ]
    }
  }
};
</script>
    
<style>
</style>