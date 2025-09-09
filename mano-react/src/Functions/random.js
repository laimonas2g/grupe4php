export default function random(from, to) {
    const minCeiled = Math.ceil(from);
    const maxFloored = Math.floor(to);
    return Math.floor(Math.random() * (maxFloored - minCeiled + 1) + minCeiled);
}