import Home from "../pages/Home.vue";
import ContactUs from "../pages/ContactUs.vue";
import AboutAs from "../pages/AboutUs.vue";
import PostsIndex from "../pages/Posts.index.vue";
import PostShow from "../pages/Posts.show.vue"

const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
    },
    {
        path: "/contatti",
        name: "contact-us",
        component: ContactUs,
    },
    {
        path: "/chi-siamo",
        name: "about-us",
        component: AboutAs,
    },
    {
        path: "/blog",
        name: "posts.index",
        component: PostsIndex,
    },
    {

        path: '/blog/:slug',
        name: "posts.show",
        component: PostShow,
        props: true,

    },
];

export default routes;