let map = document.querySelector('#map');
let paths = map.querySelectorAll('.map__image a');
let links = map.querySelectorAll('.map__list a');

// Polyfill du foreach
if (NodeList.prototype.forEach === undefined) {
    NodeList.prototype.forEach = function (callback) {
        [].forEach.call(this, callback);
    }
}

let activeArea = function (id) {
    map.querySelectorAll('.is-active').forEach(function (item) {
        item.classList.remove('is-active');
    });
    document.querySelector('#list-' + id).classList.add('is-active');
    document.querySelector('#region-' + id).classList.add('is-active');
}

paths.forEach(function (path) {
    path.addEventListener('mouseenter', function() {
        let id = this.id.replace('region-', '');
        map.querySelectorAll('.is-active').forEach(function (item) {
            item.classList.remove('is-active');
        });
        document.querySelector('#list-' + id).classList.add('is-active');
        document.querySelector('#region-' + id).classList.add('is-active');
    });
});

links.forEach(function (link) {
    link.addEventListener('mouseenter', function() {
        let id = this.id.replace('list-', '');
    })
})