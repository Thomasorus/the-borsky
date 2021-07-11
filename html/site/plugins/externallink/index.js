panel.plugin("the-borsky/externallink", {
  blocks: {
    externallink: {
      computed: {
        src() {
          if (this.content.location === "web") {
            return this.content.src;
          }
          if (this.content.image[0] && this.content.image[0].url) {
            return this.content.image[0].url;
          }
          return false;
        },
        link () {
          if (this.content.link != null) {
            return false
          }
          return this.content.link
        },
        text () {
          if (this.content.text.length === 0) {
            return false
          }
          return this.content.text
        },
        alt () {
          if (this.content.alt.length === 0) {
            return false
          }
          return this.content.alt
        },
        small () {
          if (this.content.small.length === 0) {
            return false
          }
          return this.content.small
        },
        round() {
          if (this.content.round === 0) {
            return false
          }
          return this.content.round
        }
      },
      template: `
      <div @click="open">
        <template>
          <k-block-figure
            v-if="src"
            :empty-text="$t('field.blocks.image.placeholder') + ' …'"
            :is-empty="!src"
            empty-icon="image"
            @open="open"
            @update="update"
          >
            <template v-if="src">
              <img
                :round="content.round"
                :alt="content.alt"
                :src="src"
                class="k-block-type-image-auto"
              >
            </template>
          </k-block-figure>
          <div class="externallink-text">
            <a v-if="content.text">{{content.text}}</a>
            <small v-if="content.small">{{content.small}}</small>
          </div>
        </template>
      <div> 
      `
    }
  }
});