## 東京アンテオケ教会リニューアル
東京アンテオケ教会リニューアル用リポジトリ。

## フォルダー構成 (例

.  
+-- css  
|　　+-- configure  
|　　+-- docroot  
+-- js  
+-- images  
+-- lib  
|　　+-- (Library name)  
|　　|　　+-- css  
|　　|　　+-- images  
|　　|　　+-- ...  
|　　+-- (Library name)  
+-- index.html  
+-- Gruntfile.js  

## Git Workflow

ブランチ名は以下の規則に従って命名してください。  
`fatrue`や`bugfix`でチケットに紐付かない内容の場合は(特に`bugfix`)、チケット名を省略してください。


| ブランチ名                            | 説明                     |
|---------------------------------------|--------------------------|
| master                                | 本番用ブランチ           |
| develop                               | 開発用ブランチ           |
| release                               | リリースブランチ         |
| hotfix/v1.0.0                         | 緊急のバグ修正ブランチ   |
| feature/hogehoge-hugahuga             | 機能追加ブランチ         |
| bugfix/hogehoge-hugahug               | 通常のバグ修正ブランチ   |
| refactor/hogehoge-hugahug             | リファクタリングブランチ |

## コミットの規則

- 対応するモジュールがない場合は`[none]`をモジュール名として利用する
- release/hotfixの場合は`[release]`/`[hotfix]`をモジュール名として利用する
- チケット対応中の細かい修正は該当チケットの変更に含める
- 原則として、1コミットにつき変更は1つだけ行う
- 英語/日本語のいずれかで記述する

## バージョニング規則

[Semantic Versioning](http://semver.org/)に準拠したバージョニングを採用したいと思います。

- 形式: `v${major}.${minor}.${patch}`
- 例:   `v1.0.0`

### major

- メジャーバージョン
- 公開APIに対して後方互換性のない変更を加える時に上げる

### minor

- マイナーバージョン
- 公開APIに対して後方互換性のある修正や新規APIを追加する時に上げる

### patch

- パッチバージョン
- 公開APIに変更を加えず、内部的な修正を行う時に上げる


## レビューコメントのプレフィックス

可能な場合、レビューコメントにはプレフィックスをつけ、そのコメントの意味を明確にします。

### 1. **[MUST]** 

- 必ず修正すべき指摘をする時に使います。
- このプレフィックスが付いたコメントがある場合はマージ禁止です。  

#### 具体例

> [MUST] `Array.forEach`より`_.each`の方が高速なのでこちらを使うようにしてください。

### 2. **[IMO]**

- 「自分ならこう書きます。」という提案の時に使います。
- In My Opnionの略です。

#### 具体例

> [IMO] `lodash`はチェーンできるからこの書き方の方がきれいかも。
> 
> ```javascript
> var reversed = _.chain(arr).reject(_.isEmpty).uniq().reverse();
> ```

### 3. **[nits]**

- 小さな指摘(`Typo`など)をする時に使います。
- nitspickの略です。  

#### 具体例

> [nits] s/attribuets/attributes/

### 4. **[+1]** 

- いわゆる「イイね！:+1:」です。

#### 具体例

> [+1] `async.series`を使うと読みやすい!!


## LGTMについて

[LGTM.in/g](http://www.lgtm.in/) が提唱する、画像付きLGTM(Looks good to me)を推奨します。  

LGTM画像を探す方法はいくつかありますが、[Chrome拡張機能のLTTM](https://chrome.google.com/webstore/detail/lttm/jdidcgkdggndpodjbipodfefnpgjooeh?hl=ja)がおすすめです。

### 具体例

レビューコメントに以下のように記述することで画像のリンクとなります。

```markdown
![LGTM](http://www.lgtm.in/p/82VKvO5yn) 
```

![LGTM](http://www.lgtm.in/p/82VKvO5yn) 


### Markdown

[github-markdown-preview](https://www.npmjs.com/package/github-markdown-preview) を使うと、ローカル環境でマークダウンをプレビューできます。

