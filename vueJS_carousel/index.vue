<!-- Use preprocessors via the lang attribute! e.g. <template lang="pug"> -->
<template lang="pug">
  div#app
    nav
      a(href="#") Home
      a(href="#") About
      a(href="#") Contact
    h1 {{message}}
    div
      button(@click="previous") Previous
      button(@click="next") Next
    div
      img.v-img(:src="images[previousImage]" :alt="'Image ' + (previousImage + 1)" width="200")
      img(:src="images[currentImage]" :alt="'Image ' + (currentImage + 1)" width="500")
      img.v-img(:src="images[nextImage]" :alt="'Image ' + (nextImage + 1)" width="200")
</template>

<script>
export default {
  data() {
    return {
      images: [
        'https://placekitten.com/200/300',
        'https://placekitten.com/201/400',
        'https://placekitten.com/203/500',
      ],
      currentImage: 0,
      message: 'Welcome to Vue Carousel!'
    };
  },
  computed: {
    previousImage() {
      return (this.currentImage + this.images.length - 1) % this.images.length;
    },
    nextImage() {
      return (this.currentImage + 1) % this.images.length;
    },
  },
  methods: {
    next() {
      this.currentImage = this.nextImage;
    },
    previous() {
      this.currentImage = this.previousImage;
    }
  }
};
</script>



<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

a,
button {
  color: #4fc08d;
}

button {
  background: none;
  border: solid 1px;
  border-radius: 2em;
  font: inherit;
  padding: 0.75em 2em;
}
  nav a {
  display: flex;
  justify-content: space-around;
  list-style: none;
  padding: 1em;
  background: #ddd;
}
  a {
    text-decoration:none;
  }
  img.v-img {
  position: absolute;
  width: 200px;
  height: auto;
  filter: blur(2px);
  opacity: 0.5;
  transition: all 1s ease-in-out;
}

  img {
  position: relative;
  margin: auto;
  width: 500px;
  height: auto;
}
</style>
