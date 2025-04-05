export function themeToggle() {
    return {
        moonVisible: true,

        init() {
            const theme = localStorage.getItem('theme') || 'light';
            this.setTheme(theme);
        },

        setTheme(theme) {
            this.moonVisible = theme === 'dark';

            if (theme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }

            localStorage.setItem('theme', theme);
        },

        toggleTheme() {
            const newTheme = this.moonVisible ? 'light' : 'dark';
            this.setTheme(newTheme);
        }
    }
}
