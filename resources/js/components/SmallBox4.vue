<template>
    <div :class="{ 'small-box brown': true, active: activation === '4' }">
        <h1 value="4">Education</h1>
        <img
            value="4"
            v-if="activation != '4'"
            class="icon"
            :src="'/img/icons/universal/png/eyeglasses-of-circular-shape.png'"
            alt=""
        />
        <div class="active-state" v-if="activation === '4'">
            <div class="Close" value="7">
                <span class="top" value="7"></span>
                <span class="bot" value="7"></span>
            </div>
             <div class="arrow" @click="$emit('nextPage', 'value')"></div>
        </div>
        <transition name="bounce">
            <div class="row"                     v-if="activation === '4'"
                    style="animation-delay: .8s">
                    <div class="description">
                <div class="col">
                    <img
                        value="4"
                        :src="'/img/pglogos/aberdeen.png'"
                        alt=""
                        class="companyLogo"
                    />
                </div>
                <div class="col-2">
                    <h2>University of Aberdeen</h2>
                    <p>
MA in Management studies with a 2:1 degree.The course was 
highly social and practical with general understandings of 
business management, which developed: </p>
<p>An understanding of how profit is generated in businesses 
which involved an insight to supplier relationships, operations 
management, performance and resource managing.
</p>
<p>
Understanding skills of team members and allocating tasks 
based on potential.
</p>
<p>
Professional communication manner through team exercises 
and conducted interviews for research in a dissertation based 
on “Impact of Technology Over the Marketing Systems in Entertainment Industry”
                    </p>
                </div>
                </div>
            </div>
        </transition>
        <transition name="bounce">
            <div class="row"                     v-if="activation === '4'"
                    style="animation-delay: 1s">
                    <div class="description">
                <div class="col">
                    <img
                        :src="'/img/pglogos/tmk.png'"
                        alt=""
                        class="logo"
                    />
                </div>
                <div class="col-2">
                    <h2>Turkish Maarif College</h2>
                    <p>
Lycee diploma (degree) of 7.6,completed with IT (A), English (B), 
Turkish (A), sociology (B) and maths (C) O level GCSEs.
                    </p>
                </div>
                </div>
            </div>
        </transition>
        </div>
    </div>
</template>

<script>
export default {
    props: ["activation"]
};
</script>
