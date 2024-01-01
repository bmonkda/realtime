import './bootstrap';

const channel = Echo.channel('public.playground.1');

channel.subscribed(() => {
    console.log('subscribedd!!!');
}).listen('.playground', (ev) => {
    console.log(ev);
});
