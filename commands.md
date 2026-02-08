# Claude Code - Slash Commands Reference

## Session & State Management

| Command    | Description                                                        |
| ---------- | ------------------------------------------------------------------ |
| `/status`  | Display current session status and information                     |
| `/clear`   | Clear the conversation history and start fresh                     |
| `/compact` | Compact conversation history to reduce token usage for long sessions |
| `/memory`  | View and manage persistent session memory/context (MEMORY.md)      |

## Authentication

| Command   | Description                                  |
| --------- | -------------------------------------------- |
| `/login`  | Authenticate with Anthropic services         |
| `/logout` | Sign out of your Claude Code session         |

## Configuration & Setup

| Command           | Description                                            |
| ----------------- | ------------------------------------------------------ |
| `/init`           | Initialize a new CLAUDE.md project documentation file  |
| `/config`         | View or modify configuration settings                  |
| `/permissions`    | Manage permissions for tool actions (allow/deny rules) |
| `/terminal-setup` | Configure terminal settings for your environment       |

## Model & Cost Management

| Command  | Description                                              |
| -------- | -------------------------------------------------------- |
| `/model` | View or switch between available Claude models           |
| `/cost`  | Display token usage and cost information for the session |

## Help & Diagnostics

| Command  | Description                                              |
| -------- | -------------------------------------------------------- |
| `/help`  | Display available commands and help information          |
| `/doctor`| Run diagnostic checks on your Claude Code installation   |
| `/vim`   | Toggle vim keybinding mode for the input editor          |

## Code & Git Operations

| Command   | Description                                        |
| --------- | -------------------------------------------------- |
| `/commit` | Stage changes and create a git commit with a message |
| `/review` | Review pull requests or code changes               |

## GitHub Integration

| Command        | Description                                       |
| -------------- | ------------------------------------------------- |
| `/pr-comments` | Fetch and display comments from a GitHub pull request |

## Security & Analysis

| Command            | Description                                                         |
| ------------------ | ------------------------------------------------------------------- |
| `/security-review` | Run a security review of pending changes on the current branch      |
| `/insights`        | Generate analysis reports of your Claude Code sessions              |

## Debugging

| Command  | Description                                                    |
| -------- | -------------------------------------------------------------- |
| `/debug` | Debug your current Claude Code session by reading the debug log |

## Keyboard & Editor

| Command             | Description                                         |
| ------------------- | --------------------------------------------------- |
| `/keybindings-help` | Customize keyboard shortcuts and rebind keys        |

---

## Quick Tips

- Run `/help` inside Claude Code to see the latest list of commands.
- Run `/doctor` to troubleshoot installation or configuration issues.
- Use `/compact` during long sessions to free up context window space.
- Use `/init` at the start of a new project to generate a `CLAUDE.md` file.
- Use `/cost` to monitor your API token usage and spending.
- Some commands (like `/pr-comments`, `/review`, `/commit`) integrate with git and GitHub.
