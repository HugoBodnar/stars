<template>
    <div class="md:container md:mx-auto">
        <div class="my-4 text-center font-bold text-2xl md:text-3xl">Profile Browser</div>
        <div class="md:grid md:grid-cols-[auto_1fr]">
            <nav class="relative w-full md:w-52 flex flex-col md:pt-5">
                <div v-for="(star, i) in stars" class="nav-item bg-gray-300 border-t md:border-l md:first:rounded-tl-lg md:last:rounded-bl-lg last:border-b border-gray-400" :class="{ 'selected': selectedStarIndex === i }">
                    <div class="nav-item-name px-2 py-1 text-xs cursor-pointer"  @click="selectStar(i)">{{ star.firstname + ' ' + star.lastname }}</div>
                    <profile :star="star" class="md:hidden" :class="{ 'hidden': selectedStarIndex !== i }"></profile>
                </div>
            </nav>
            <div class="hidden md:block">
                <profile :star="stars[selectedStarIndex]"></profile>
            </div>
        </div>
    </div>
</template>

<script>
import Profile from "./Profile.vue";

export default {
    name: "App",
    components: {Profile},
    props: {
        stars: {
            type: Array
        }
    },
    data() {
        return {
            selectedStarIndex: 0,
        }
    },
    methods: {
        selectStar(i) {
            this.selectedStarIndex = i;
        }
    }

}
</script>

<style scoped lang="scss">
    nav {
        .nav-item.selected {
            background-color: theme('colors.white');
            z-index: 1;

            .nav-item-name {
                font-weight: theme('fontWeight.bold');
            }
        }

        @screen md {
            &:after {
                background-color: theme('colors.gray.400');
                content: '';
                position: absolute;
                right: 0;
                top: 0;
                height: 100%;
                width: 1px;
                z-index: 0;
            }
        }
    }
</style>
