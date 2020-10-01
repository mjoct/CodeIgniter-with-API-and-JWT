# CodeIgniter-with-API-and-JWT

> NOTE: Find Github Formatting [here](https://docs.github.com/en/free-pro-team@latest/github/writing-on-github/basic-writing-and-formatting-syntax)

## Git Basic Commands
**How to check Git Status**
```
git status 
```

**How to configure username and password to Github**
```
git config remote.origin.url https://{USERNAME}:{PASSWORD}@github.com/{USERNAME}/{REPONAME}.git
```

**How to Clone a repo**
```
git clone https://github.com/{USER_NAME}/{REPO_NAME}.git
```

**How to Add file to Git**
```
git add {FILENAME.EXT} 
```

**How to Commit to Git**
```
git commit -m "Added new file"
```

**How to Push to Git**
```
git push -u origin master
```
**Note:** In case you will find an error during push, this means that you might not have the updated copy from the remote. So, you have to run the **git pull** first.

![alt text](https://raw.githubusercontent.com/mjoct/CodeIgniter-with-API-and-JWT/master/Screen%20Shot%202020-10-01%20at%203.17.11%20pm.png)

**How to Update local copy**

This can be done by either of the 2 commands -- **[git fetch](https://www.atlassian.com/git/tutorials/syncing/git-fetch)** or **[git pull](https://www.atlassian.com/git/tutorials/syncing/git-pull)**. The difference between the two is; **git fetch** does not merge changes from remote to local automatically. Whereas **git pull** merge the changes automatically. However, most of the time we will be using the **git pull**.

```
git push -u origin master
```


