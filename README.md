## How can you efficiently archive slack channels without having to join and archive them one by one?
 
# What is it?
This script helps you to clear all your Slack channels start with sk or whatever you want.

![alt text](https://github.com/andyocnz/Slack-bulk-channel-archive/blob/master/sk-slack.png)

# How to use?
#### 1. Get your token
https://api.slack.com/custom-integrations/legacy-tokens

#### 2. Replace your token on json_url
###### Line 4
```
$json_url = "https://slack.com/api/channels.list?token=_______YOUR TOKEN HERE________&pretty=1";
```
###### Line 25
```
$json_url2 = "https://slack.com/api/channels.archive?token=_______YOUR TOKEN HERE________&channel=".$cid."&pretty=1";

```

#### 3. Run on localhost

###### (This script should archive 2-3 channels per second)



