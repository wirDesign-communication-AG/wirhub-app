/** @type {import('eslint').Linter.Config[]} */
export default [
  {
    files: [
      '**/*.js',
    ],
  },
  {
    ignores: ['node_modules/**'],
  },
  {
    languageOptions: {
      ecmaVersion: 'latest',
    },
    rules: {},
  },
];