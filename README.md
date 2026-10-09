# kubernetes_curse
## Exercises
### Chapter 1
[1.2] todo app: web server that logs `Server started in port NNNN` (port set via `PORT`, default 3000).

```
docker build -t todo-app:1.2 .
k3d image import todo-app:1.2
kubectl apply -f manifests/deployment.yaml
kubectl logs -f deployment/todo-app
```
